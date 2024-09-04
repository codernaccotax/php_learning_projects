
CREATE TABLE `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `option_a` varchar(255) NOT NULL,
  `option_b` varchar(255) NOT NULL,
  `option_c` varchar(255) NOT NULL,
  `option_d` varchar(255) NOT NULL,
  `correct_option` char(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

INSERT INTO questions (question, option_a, option_b, option_c, option_d, correct_option) VALUES
('What does PHP stand for?', 'Personal Home Page', 'Preprocessor Hypertext', 'Programming Hypertext Preprocessor', 'Pre Hypertext Preprocessor', 'B'),
('Which PHP statement is used to output text?', 'print', 'echo', 'display', 'show', 'B'),
('What is the correct way to start a PHP block?', '<?php', '<?=', '<php', '<?PHP', 'A'),
('Which of the following is a superglobal variable?', '$_POST', '$_SERVER', '$_COOKIE', 'All of the above', 'D'),
('What is the default file extension for PHP files?', '.php3', '.html', '.php', '.ph', 'C'),
('How can we get the IP address of the client in PHP?', '$_SERVER[\'SERVER_ADDR\']', '$_SERVER[\'REMOTE_ADDR\']', '$_SERVER[\'HTTP_HOST\']', '$_SERVER[\'CLIENT_ADDR\']', 'B'),
('What is the use of the `isset()` function in PHP?', 'Check if a variable is set', 'Check if a variable is empty', 'Check if a variable is null', 'None of the above', 'A'),
('Which function is used to include a file in PHP?', 'include()', 'require()', 'Both A and B', 'None of the above', 'C'),
('What is the scope of a variable declared outside a function in PHP?', 'Local', 'Global', 'Static', 'None of the above', 'B'),
('How do you declare a constant in PHP?', 'define()', 'const', 'constant', 'Both A and B', 'D'),
('Which function is used to check if a file exists in PHP?', 'file_exist()', 'file_exists()', 'is_file()', 'exists_file()', 'B'),
('What is the purpose of `explode()` function in PHP?', 'Split a string into an array', 'Join array elements into a string', 'Find a substring in a string', 'None of the above', 'A'),
('Which function is used to get the length of a string in PHP?', 'length()', 'strlen()', 'size()', 'strlength()', 'B'),
('What is the purpose of the `session_start()` function in PHP?', 'Start a new session', 'End a session', 'Store session variables', 'Destroy a session', 'A'),
('Which method is used to send a form data using GET method in PHP?', '$_POST', '$_GET', '$_FORM', '$_REQUEST', 'B'),
('What is the output of the following code? echo 3 + "5 cars";', '35', '8', '3', 'Error', 'B'),
('How do you create an array in PHP?', 'array()', 'Array()', 'arr()', 'createArray()', 'A'),
('Which of the following is a PHP magic constant?', '__LINE__', '__FILE__', '__METHOD__', 'All of the above', 'D'),
('How can you get the current script name in PHP?', '$_SERVER[\'SCRIPT_NAME\']', '$_SERVER[\'PHP_SELF\']', '$_SERVER[\'SCRIPT_FILENAME\']', '$_SERVER[\'SCRIPT\']', 'B'),
('What is the correct way to create a function in PHP?', 'function myFunc()', 'create myFunc()', 'def myFunc()', 'None of the above', 'A'),
('What is the use of the `empty()` function in PHP?', 'Check if a variable is set', 'Check if a variable is empty', 'Check if a variable is null', 'None of the above', 'B'),
('Which function is used to count the number of elements in an array in PHP?', 'size()', 'count()', 'length()', 'sizeof()', 'B'),
('What is the purpose of the `header()` function in PHP?', 'To send HTTP headers', 'To send HTML headers', 'To start a session', 'To include a file', 'A'),
('How do you terminate a script in PHP?', 'exit()', 'die()', 'Both A and B', 'None of the above', 'C'),
('Which keyword is used to define a class in PHP?', 'define', 'class', 'new', 'create', 'B'),
('What is the use of the `var_dump()` function in PHP?', 'Dump the content of a variable', 'Display variable type', 'Display variable value', 'All of the above', 'D'),
('How do you connect to a MySQL database using PDO in PHP?', 'new PDO()', 'pdo_connect()', 'connect_pdo()', 'None of the above', 'A'),
('What is the correct way to end a PHP statement?', '.', ';', ':', 'end', 'B'),
('How can you get the number of characters in a string in PHP?', 'strlen()', 'count()', 'sizeof()', 'length()', 'A'),
('What is the purpose of the `implode()` function in PHP?', 'Split a string into an array', 'Join array elements into a string', 'Find a substring in a string', 'None of the above', 'B'),
('Which function is used to generate a random number in PHP?', 'random()', 'rand()', 'generateRandom()', 'getRandom()', 'B'),
('What is the use of `strip_tags()` function in PHP?', 'Remove spaces from a string', 'Remove HTML and PHP tags from a string', 'Convert tags to string', 'None of the above', 'B'),
('How do you create a cookie in PHP?', 'cookie_set()', 'setcookie()', 'create_cookie()', 'None of the above', 'B'),
('What is the purpose of the `md5()` function in PHP?', 'Encrypt a string', 'Hash a string', 'Generate a random string', 'None of the above', 'B'),
('How can you delete a file in PHP?', 'delete()', 'unlink()', 'remove()', 'None of the above', 'B'),
('What is the output of the following code? echo "Hello " . "World!";', 'Hello World!', 'HelloWorld!', 'Hello . World!', 'Error', 'A'),
('Which function is used to find files in a directory in PHP?', 'find()', 'glob()', 'search()', 'find_files()', 'B'),
('How do you get the length of an array in PHP?', 'array_length()', 'length()', 'count()', 'sizeof()', 'C'),
('What does `PHP_SELF` return?', 'The PHP version', 'The current script', 'The server IP', 'The client IP', 'B'),
('Which function is used to get the current date in PHP?', 'getdate()', 'date()', 'current_date()', 'get_current_date()', 'B'),
('What does the `json_encode()` function do in PHP?', 'Convert an array to a JSON string', 'Decode a JSON string', 'Encode a string', 'None of the above', 'A'),
('How do you define a constant in PHP?', 'const CONSTANT_NAME', 'define(CONSTANT_NAME)', 'constant(CONSTANT_NAME)', 'None of the above', 'B'),
('What is the correct way to open a file in PHP for reading?', 'fopen(file, "r")', 'open(file, "r")', 'read(file)', 'fread(file, "r")', 'A'),
('What is the output of the following code? $a = 1; $b = &$a; $b = 2; echo $a;', '1', '2', 'Error', 'Undefined', 'B'),
('Which function is used to sort an array in PHP?', 'sort()', 'order()', 'arrange()', 'array_sort()', 'A'),
('What is the use of `strpos()` function in PHP?', 'Find the position of a substring in a string', 'Replace a substring', 'Split a string', 'None of the above', 'A'),
('How can you prevent SQL injection in PHP?', 'Using `mysql_query()`', 'Using `mysqli_query()`', 'Using PDO with prepared statements', 'None of the above', 'C'),
('Which of the following is a PHP predefined error reporting constant?', 'E_ALL', 'ERROR_ALL', 'ALL_ERRORS', 'NONE', 'A'),
('What is the default session timeout in PHP?', '20 minutes', '30 minutes', '24 minutes', 'No default', 'B'),
('How can you retrieve data from a form that is submitted using the POST method in PHP?', '$_POST[]', '$_GET[]', '$_REQUEST[]', '$_DATA[]', 'A'),
('Which function is used to redirect a user in PHP?', 'header()', 'redirect()', 'location()', 'move()', 'A'),
('What is the use of the `file_get_contents()` function in PHP?', 'Read a file into a string', 'Write a string to a file', 'Delete a file', 'None of the above', 'A');
