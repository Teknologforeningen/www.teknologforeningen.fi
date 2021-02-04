#!/bin/sh

crond -l 2 -f &
status=$?
if [ $status -ne 0 ]; then
  echo "Failed to start nginx: $status"
  exit $status
fi

php-fpm -F &
status=$?
if [ $status -ne 0 ]; then
  echo "Failed to start php-fpm: $status"
  exit $status
fi

/opt/generate_menus.sh
if [ $status -ne 0 ]; then
  echo "Script generate_menus.sh returned error: $status"
  exit $status
fi

while sleep 60; do
  ps aux | grep crond | grep -v 'grep crond' -q
  PROCESS_1_STATUS=$?
  ps aux | grep php-fpm | grep -v 'grep php-fpm' -q
  PROCESS_2_STATUS=$?
  # If the greps above find anything, they exit with 0 status
  # If they are not both 0, then something is wrong
  if [ $PROCESS_1_STATUS -ne 0 -o $PROCESS_2_STATUS -ne 0 ]; then
    echo "One of the processes has already exited."
    exit 1
  else
	  echo "all ok!"
  fi
done
