#TaffaAPI
##An API which retrieves the menu at TÄFFÄ AB, Otakaari 22 02150 ESPOO FINLAND
This API has a number of methods for getting the menu for different days. 

##Methods
* getNextMenu: String
A method for getting the next available menu, that is: todays menu if the restaurant is open, and tomorrows menu if the restaurant is not.
* getAtTheMoment: String
A method for getting the menu at this moment, returns that the restaurant is not open if it is not, alternatively the menu if the restaurant is.
* getToday: String
Gets the menu with offset 0 (today)
* getTomorrow: String
Gets the menu with offset 1 (tomorrow)
* getDayN: String
Gets the menu for day N in the week, monday being 1 and sunday 7, if we are past that day in this week, we get next weeks menu for that day.
* setLang: Boolean
Sets the language to one of the languages available, being: en, sv, fi. Returns true on success. The default language is sv.

##Public members
* langArr
An assoc array containing the available languages
