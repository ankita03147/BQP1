-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2021 at 02:34 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fid` int(8) NOT NULL,
  `ffirstname` varchar(15) NOT NULL,
  `flastname` varchar(15) NOT NULL,
  `femail` varchar(25) NOT NULL,
  `fpassword` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fid`, `ffirstname`, `flastname`, `femail`, `fpassword`) VALUES
(1, 'kavya', 'gupta', 'kavya@gmail.com', 'kavya123'),
(3, 'kiran', 'kumari', 'kiran@gmail.com', 'kiran123');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `quesid` int(11) NOT NULL,
  `questext` varchar(200) NOT NULL,
  `OptionA` varchar(70) NOT NULL,
  `OptionB` varchar(70) NOT NULL,
  `OptionC` varchar(70) NOT NULL,
  `OptionD` varchar(70) NOT NULL,
  `correctans` int(11) NOT NULL,
  `qid` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`quesid`, `questext`, `OptionA`, `OptionB`, `OptionC`, `OptionD`, `correctans`, `qid`) VALUES
(44, 'Which of the following is used to specify the subscript of text using CSS?', 'vertical-align: sub', 'vertical-align: super', 'vertical-align: subscript', 'None of the above', 1, 33),
(45, 'Which of the following CSS property is used to specify the space between every letter inside an element?', 'alpha-spacing', 'character-spacing', 'letter-spacing', 'alphabet-spacing', 3, 33),
(46, 'The CSS property used to specify whether the text is written in the horizontal or vertical direction?', 'writing-mode', 'text-indent', 'text-indent', 'None of the above', 1, 33),
(47, 'Which of the following syntax is correct in CSS to make each word of a sentence start with a capital letter?', 'text-style : capital;', 'transform : capitalize;', 'text-transform : capital;', 'text-transform : capitalize;', 4, 33),
(48, 'How to select the elements with the class name \"example\"?', 'example', '#example', '.example', 'Class example', 3, 33),
(49, 'The CSS property used to draw a line around the elements outside the border?', 'border', 'outline', 'padding', 'line', 2, 33),
(50, 'Which of the following is not a value of the font-variant property in CSS?', 'normal', 'small-caps', 'large-caps', 'inherit', 3, 33),
(51, ' Which of the following CSS property is used to specify whether the table cells share the common or separate border?', 'border-collapse', 'border-radius', 'border-spacing', 'None of the above', 1, 33),
(52, 'The CSS property used to make the rounded borders, or rounded corners around an element is -', 'border-collapse', 'border-radius', 'border-spacing', 'None of the above', 2, 33),
(53, 'The CSS property used to set the distance between the borders of the adjacent cells in the table is -', 'border-collapse', 'border-radius', 'border-spacing', 'None of the above', 3, 33),
(54, 'Which of the following selector in CSS is used to select the elements that do not match the selectors?', ':! selector', ':not selector', ':empty selector', 'None of the above', 2, 33),
(55, 'Which of the following is not a type of combinator?', '>', '~', '+', '*', 4, 33),
(56, 'CSS stands for -', 'Cascade style sheets', 'Color and style sheets', 'Cascading style sheets', 'None of the above', 3, 30),
(57, 'Which of the following is the correct syntax for referring the external style sheet?', '<style src = example.css>', '<style src = \"example.css\" >', '<stylesheet> example.css </stylesheet>', '<link rel=\"stylesheet\" type=\"text/css\" href=\"example.css\">', 4, 30),
(58, 'The property in CSS used to change the background color of an element is -', 'bgcolor', 'color', 'background-color', 'All of the above', 3, 30),
(59, 'The property in CSS used to change the text color of an element is -', 'bgcolor', 'color', 'background-color', 'All of the above', 2, 30),
(60, 'The CSS property used to control the elements font-size is -', 'text-style', 'text-size', 'font-size', 'None of the above', 3, 30),
(61, 'The HTML attribute used to define the inline styles is -', 'style', 'styles', 'class', 'None of the above', 1, 30),
(62, 'The HTML attribute used to define the internal stylesheet is -', '<style>', 'style', '<link>', '<script>', 1, 30),
(63, 'Which of the following CSS property is used to set the background image of an element?', 'background-attachment', 'background-image', 'background-color', 'None of the above', 2, 30),
(64, 'Which of the following is the correct syntax to make the background-color of all paragraph elements to yellow?', 'p {background-color : yellow;}', 'p {background-color : #yellow;}', 'all {background-color : yellow;}', 'all p {background-color : #yellow;}', 1, 30),
(65, 'Which of the following is the correct syntax to display the hyperlinks without any underline?', 'a {text-decoration : underline;}', 'a {decoration : no-underline;}', 'a {text-decoration : none;}', 'None of the above', 3, 30),
(66, ' Which of the following property is used as the shorthand property for the padding properties?', 'padding-left', 'padding-right', 'padding', 'All of the above', 3, 30),
(67, 'The CSS property used to make the text bold is -', 'font-weight : bold', 'weight: bold', 'font: bold', 'style: bold', 1, 30),
(68, 'Are the negative values allowed in padding property?', 'Yes', 'No', 'Cant say', 'May be', 2, 30),
(69, 'Which of the following property is used as the shorthand property of margin properties?', 'margin-left', 'margin-right', 'margin', 'None of the above', 3, 30),
(70, 'The CSS property used to specify the transparency of an element is -', 'opacity', 'filter', 'visibility', 'overlay', 1, 30),
(71, 'Which of the following is the correct syntax to select the p siblings of a div element?', 'p', 'div + p', 'div + p', 'div ~ p', 4, 33),
(72, 'Which of the following CSS property is used to add shadows to the text?', 'text-shadow', 'text-stroke', 'text-overflow', 'text-decoration', 1, 33),
(73, ' The term PHP is an acronym for PHP:_______________.', 'Hypertext Preprocessor', 'Hypertext multiprocessor', 'Hypertext markup Preprocessor', 'Hypertune Preprocessor', 1, 31),
(74, 'PHP is a ____________ language?', 'user-side scripting', 'client-side scripting', 'server-side scripting', 'Both B and C', 3, 31),
(75, 'Who among this is the founder of php language?', ' Tim Berners-Lee', 'Brendan Eich', 'Guido van Rossum', 'Rasmus Lerdorf', 4, 31),
(76, 'In which year php was created?', '1993', '1994', '1995', '1996', 2, 31),
(77, ' PHP files have a default file extension of_______.', '.html', '.xml', '.php', '.hphp', 3, 31),
(78, 'Which of the following is the correct syntax of php?', '<?php >', '<php >', '?php ?', '<?php ?>', 4, 31),
(79, 'Which of the following is the latest version of php?', '7.1', ' 7.2', '7.3', '7.4', 2, 31),
(80, 'Which of the following is the Release date of latest version (7.2) of php?', '27 November 2017.', '28 November 2017.', '29 November 2017.', '30 November 2017.', 4, 31),
(81, 'Which of the below statements is equivalent to $sub -= $sub?', '$sub = $sub', '$sub = $sub -$sub', '$sub = $sub - 1', '$sub = $sub - $sub - 1', 2, 31),
(82, 'Which statement will output $lfc on the screen?', ' echo \"$lfc\";', 'echo \"$$lfc\";', 'echo \"/$lfc\";', 'echo \"$lfc;\";', 1, 31),
(83, ' How will you concatenate two strings?', 'Using . operator', 'Using + operator.', 'Using add() function', 'Using append() function', 1, 31),
(84, 'PHP is an example of ___________ scripting language.', 'Server-side', 'Client-side', 'Browser-side', 'In-side', 1, 31),
(85, 'Who is known as the father of PHP?', 'Rasmus Lerdorf', 'Willam Makepiece', 'Drek Kolkevi', 'List Barely', 0, 31),
(86, 'PHP scripts are enclosed within _______', '<php> . . . </php>', '<?php . . . ?>', '?php . . . ?php', '<p> . . . </p>', 2, 31),
(87, 'Which of the following is not true?', 'PHP can be used to develop web applications.', 'PHP makes a website dynamic', 'PHP applications can not be compile', 'PHP can not be embedded into html.', 4, 31),
(88, 'HTML tags are enclosed in', 'curly brackets', 'square brackets', 'double quotes', 'angular brackets', 4, 28),
(89, 'What is the difference between XML and HTML?', 'HTML is used for exchanging data', 'XML is used for exchanging data HTML is not.', 'HTML can have user defined tags, XML cannot', 'Both b and c above', 2, 28),
(90, 'Which tags are most commonly used by search engines?', 'Heading', 'Title', 'Paragrah', 'All of above', 1, 28),
(91, 'What is the <br> tag for?', ' Space', 'Paragraph break', 'Line break', 'Word break', 3, 28),
(92, 'What is the attribute for <image> tag?', 'pt', 'url', 'path', 'src', 4, 28),
(93, 'Each list item in an ordered or unordered list has which tag?', 'list tag', 'ls tag', 'li tag', 'ol tag', 3, 28),
(94, 'Which of the following tags below are used for a multi-line text input control?', 'textml tag ', 'text tag', 'textarea tag', 'Both b and c above', 3, 28),
(102, 'Which of the following attributes below are used for a font name?', 'fontname', 'fn', 'font', 'face', 4, 28),
(103, '  What attribute is used to specify number of rows?', 'Rownum', 'Rownumb', 'rn', 'Rowspan', 4, 28),
(104, 'How can we resize the image?', 'Using resize attribute', 'Using height and width', 'Using size attribute', 'Using rs attribute', 2, 28),
(105, 'For Frames in HTML, how do you specify the rest of the screen?', 'Using &', 'Using $', 'Using *', 'Using #', 3, 28),
(106, 'The value of #FFFFFF is', 'Black', 'White', '32567', 'none of the above', 2, 28),
(107, 'Which is the following is a text editor?', 'Notepad++', 'MS-word', 'Both a and b', 'None of the above', 1, 28),
(108, 'The value of #000000 is', 'Black', 'White', '32567', 'none of the above', 1, 28),
(109, 'A tag is', 'HTML command', 'HTML Header', 'HTML statement', 'None of these', 1, 28),
(110, 'HTML uses', 'User defined tags', 'Pre-specified tags', 'Fixed tags defined by the language', 'Tags only for linking', 3, 34),
(111, 'The year in which HTML was first proposed _______.', '1990', '1980', '2000', '1995', 1, 34),
(112, 'Fundamental HTML Block is known as ___________.', 'HTML Body', 'HTML Tag', 'HTML Attribute', 'HTML Element', 2, 34),
(113, 'Who is Known as the father of World Wide Web (WWW)?', 'Robert Cailliau', 'Tim Thompson', 'Charles Darwin', 'Tim Berners-Lee', 4, 34),
(114, 'How can you make a bulleted list with numbers?', '<dl>', '<ol>', '<list>', '<ul>', 2, 34),
(115, 'HTML web pages can be read and rendered by _________', 'Compiler', 'Server', 'Web Browser', 'Interpreter', 3, 34),
(116, 'Which of the following is not a browser ?', 'Microsofts Bing', 'Netscape Navigator', 'Mozilla Firefox', 'Opera', 1, 34),
(117, 'Which HTML tag produces the biggest heading?', '<h7>', '<h9>', '<h4>', '<h1>', 4, 34),
(118, 'How to insert an image in HTML?', '<img href = \"jtp.png\" />', '<img url = \"jtp.png\" />', '<img link = \"jtp.png\" />', '<img src = \"jtp.png\"/>', 4, 34),
(119, 'How to add a background color in HTML?', '<marquee bg color: \"red\">', '<marquee bg-color = \"red\">', '<marquee bgcolor = \"red\">', '<marquee color = \"red\">', 3, 34),
(120, '<input> is -', 'a format tag.', 'an empty tag.', 'All of the above', 'None of the above', 3, 34),
(121, 'How to create a checkbox in HTML?', '<input type = \"checkbox\">', '<input type = \"button\">', '<checkbox>', '<input type = \"check\">', 1, 34),
(122, 'Which of the following tag is used to define options in a drop-down selection list?', '<select>', '<list>', '<dropdown>', '<option>', 4, 34),
(123, 'The <hr> tag in HTML is used for -', 'new line', 'vertical ruler', 'new paragraph', 'horizontal ruler', 4, 34),
(124, 'Which built-in method returns the index within the calling String object of the first occurrence of the specified value?', 'getIndex()', ' location()', 'indexOf()', 'None of the above.', 3, 29),
(125, 'Which of the following function of Number object returns a string value version of the current number?', ' toString()', ' toFixed()', 'toLocaleString()', 'toPrecision()', 1, 29),
(126, 'Which of the following function of String object returns the characters in a string between two indexes into the string?', 'slice()', ' split()', 'substr()', 'substring()', 4, 29),
(127, 'Which of the following function of String object returns the calling string value converted to upper case while respecting the current locale?', ' toLocaleUpperCase()', 'toUpperCase()', 'toString()', 'substring()', 1, 29),
(128, 'Which of the following function of Array object returns a new array comprised of this array joined with other array(s) and/or value(s)?', 'concat()', 'pop()', 'push()', 'some()', 1, 29),
(129, 'Which of the following function of Array object adds one or more elements to the end of an array and returns the new length of the array?', 'pop()', 'push()', ' join()', 'map()', 2, 29),
(130, 'Which of the following function of Array object returns a string representing the array and its elements?', ' toSource()', 'sort()', 'splice()', ' toString()', 4, 29),
(131, 'Which of the following is not a reserved word in JavaScript?', ' interface', 'throws', 'program', 'short', 3, 29),
(132, 'what is the correct file extension for Javascript files?', '.java', '.js', '.javascript', '.script', 2, 29),
(133, 'Which type of JavaScript language is ___', 'Object-Oriented', 'Object-Based', 'Assembly-language', 'High-level', 2, 29),
(134, '  The \"function\" and \" var\" are known as:', 'Keywords', 'Data types', 'Declaration statements', 'Prototypes', 3, 29),
(135, 'Which of the following variables takes precedence over the others if the names are the same?', 'Global variable', 'The local element', 'The two of the above', 'None of the above', 2, 29),
(136, 'Which one of the following is the correct way for calling the JavaScript code?', 'Preprocessor', 'Triggering Event', 'RMI', 'Function/Method', 4, 29),
(137, 'Which of the following type of a variable is volatile?', 'Mutable variable', 'Dynamic variable', 'Volatile variable', 'Immutable variable', 1, 29),
(138, 'Which of the following option is used as hexadecimal literal beginning?', '00', '0x', '0X', 'Both 0x and 0X', 4, 29);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `qid` int(8) NOT NULL,
  `q_name` varchar(50) NOT NULL,
  `lang` varchar(10) NOT NULL,
  `noq` int(11) NOT NULL,
  `fid` int(8) NOT NULL,
  `q_desc` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`qid`, `q_name`, `lang`, `noq`, `fid`, `q_desc`) VALUES
(28, 'HTML Basics', 'HTML', 15, 1, 'basics of html'),
(29, 'JAVASCRIPT', 'JAVASCRIPT', 15, 1, 'basics of javascript'),
(30, 'CSS basics', 'CSS', 15, 1, 'basic questions based on CSS'),
(31, 'PHP', 'PHP', 15, 3, 'php basics'),
(33, 'CSS test yourself', 'CSS', 14, 3, 'questions to test yourself on the CSS language'),
(34, 'HTML questions', 'HTML', 14, 3, 'questions based on HTML');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `entryno` int(11) NOT NULL,
  `score` int(3) NOT NULL,
  `sid` int(8) NOT NULL,
  `qid` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`entryno`, `score`, `sid`, `qid`) VALUES
(1, 10, 1, 30),
(2, 12, 1, 28),
(3, 9, 2, 33),
(4, 13, 2, 33),
(5, 8, 2, 31);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(8) NOT NULL,
  `sfirstname` varchar(15) NOT NULL,
  `slastname` varchar(15) NOT NULL,
  `semail` varchar(25) NOT NULL,
  `spassword` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `sfirstname`, `slastname`, `semail`, `spassword`) VALUES
(1, 'ankita', ' ', 'ankita@gmail.com', 'ankita123'),
(2, 'kumari', 'shalini', 'shalini@gmail.com', 'shalini123');

-- --------------------------------------------------------

--
-- Table structure for table `studentans`
--

CREATE TABLE `studentans` (
  `selectedans` int(11) NOT NULL,
  `sid` int(8) NOT NULL,
  `quesid` int(11) NOT NULL,
  `entryno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fid`),
  ADD UNIQUE KEY `femail` (`femail`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`quesid`),
  ADD KEY `qid` (`qid`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`qid`),
  ADD KEY `fid` (`fid`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`entryno`),
  ADD KEY `fk_grade_id` (`qid`),
  ADD KEY `fk_grade_id1` (`sid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `semail` (`semail`);

--
-- Indexes for table `studentans`
--
ALTER TABLE `studentans`
  ADD PRIMARY KEY (`entryno`),
  ADD KEY `fk_grade_id2` (`sid`),
  ADD KEY `fk_grade_id3` (`quesid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `fid` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `quesid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `qid` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `entryno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `studentans`
--
ALTER TABLE `studentans`
  MODIFY `entryno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`qid`) REFERENCES `quiz` (`qid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `quiz_ibfk_1` FOREIGN KEY (`fid`) REFERENCES `faculty` (`fid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `fk_grade_id` FOREIGN KEY (`qid`) REFERENCES `quiz` (`qid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_grade_id1` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `studentans`
--
ALTER TABLE `studentans`
  ADD CONSTRAINT `fk_grade_id2` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_grade_id3` FOREIGN KEY (`quesid`) REFERENCES `questions` (`quesid`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
