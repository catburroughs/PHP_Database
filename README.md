# PHP_Database

PHP Website backed by mySQL database
Built on VSCode and run by putting all files in htdocs in XAMP

Database: toucandatabase
user: toucan
password: toucan

KNOWN ISSUES:
The Add member form is open to sql injections. As one of the fields is an array of values I can't use the bind_param() function for protection. With more time I could find a work around as I've stashed a wip or I could use PDO instead of mysqli which has an inbuilt function for dealing with array parameters.

I've learned it is not best practice to have an sql field with multiple inputs so in future I would design a different database with a many to many personid to school_id.

I could also add more layers of abstraction into the School Member and School Classes to increase the mvp organisation of the project.
