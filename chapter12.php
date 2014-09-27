<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/main.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.10.0.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"></script>
<script  type="text/javascript" src="js/main.js"></script>
<script type="text/javascript">
  
</script>

</head>

<body>

<div id="container">
   
    <?php include('left-link.php'); ?>
    <div class="middle-pannel">
      <div class="theory">
        <h1 align="center">Shell Programming</h1>
        <div id=1201></div>
        <p><h2><strong>1. Why  shell programming?</strong></h2>
        <p><br />
          Even though there are various  graphical interfaces available for Linux the shell still is a very neat tool.  The shell is not just a collection of commands but a really good programming  language. We can  automate a lot of tasks  with it, the shell is very  good for  system administration tasks, we can very quickly try out if our ideas  work which makes it very useful  for   simple  prototyping and it is  very  useful for small utilities that  perform some relatively  simple  tasks  where efficiency is less important  than ease of configuration, maintenance and portability.<br />
          So let's see now how it works<br />
        </p>
        <p><strong>1.1  Creating a script</strong><br />
          There  are   a  lot  of   different  shells  available   for  Linux  but   usually  the  bash   (bourne  again  shell)   is  used  for   shell programming as it  is  available  for free and is easy to use.  So  all  the scripts we will write in this article use the bash (but will most of the  time also run with its older sister, the bourne shell).<br />
          For writing our shell programs we  use any kind of text editor, e.g. nedit, kedit, emacs, vi...as with other  programming languages. The program must start with the following line (it must  be the first line in the file)<br />
        </p>
        <p><strong>$ !/bin/sh</strong><br />
        </p>
        <p>The #! Characters tell the system  that the first argument that follows on the line is the program to be used to  execute this file. In this case /bin/sh is shell we use.<br />
          When we  have written our script and saved it we  have  to make  it   executable to be able to use it. To make a script executable type<br />
        </p>
        <p><strong>$ chmod +x filename</strong><br />
        </p>
        <p>Then we can start our script by typing: ./filename<br />
        </p>
        <p><strong>1.2  Comments</strong><br />
        </p>
        <p>Comments in shell programming  start with # and go until the end of the line. We really recommend to use  comments. If we have comments and we don't use a certain script for some time  we  will still know immediately what  it  is doing and how it works.
        </p>
        </p>
        <p><strong>1.3 Variables</strong><br />
        </p>
        <p>As  in   other  programming  languages   we  can't  live   without  variables.  In   shell  programming  all   variables  have  the datatype string and we do not need to  declare them. To assign a value to a variable we write:<br />
        </p>
        <p><strong>varname=value</strong><br />
        </p>
        <p>To get the value back we just put  a dollar sign in front of the variable:<br />
        </p>
        <p><strong>$!/bin/sh</strong><br />
        </p>
        <p>Assign a value:<br />
        </p>
        <p><strong>$ a=&quot;hello world&quot;</strong><br />
        </p>
        <p>Now print the content of  &quot;a&quot;:<br />
        </p>
        <p><strong>echo &quot;A is:&quot;</strong><br />
          <strong>echo $a</strong><br />
        </p>
        <p>Type  this lines   into  our text editor  and   save  it e.g.  as first.   Then  make the script  executable   by  typing <strong>chmod +x first </strong>in the shell and then start it by typing ./first<br />
          The script will just print:<br />
        </p>
        <p><strong>A is:</strong><br />
          <strong>hello world</strong><br />
        </p>
        <p>Sometimes it is possible to  confuse variable names with the rest of the text:<br />
        </p>
        <p><strong>$num=2</strong><br />
          <strong>echo &quot;this is the $numnd&quot;</strong><br />
        </p>
        <p>This will not print &quot;this is  the 2nd&quot; but &quot;this is the &quot; because the shell searches for a  variable called numnd which has no value. To tell the shell that we mean the  variable num we have to use curly braces:<br />
        </p>
        <p><strong>$ num=2</strong><br />
          <strong>echo &quot;this is the ${num}nd&quot;</strong><br />
        </p>
        <p>This prints what we want: this is  the 2nd <br />
          There are a number of variables  that are always automatically set. We will   discuss them further down when we use them the first time.<br />
          If we need  to handle mathematical  expressions then we need to  use programs such as expr. Besides the normal  shell variables that are only valid within the shell program there are also  environment variables. A variable preceded by   the  keyword  export   is  an  environment   variable.  We  will   not  talk  about   them  here  any   further  since  they   are normally only used in login scripts.<br />
        </p>
        <p><strong>1.4. Exporting Variables</strong><br />
        </p>
        <p>By default, variables defined  within a  shell are local to it. Any  process/command executed by that shell   will  not  get access to these variables, unless they  are exported to the environment.<br />
        </p>
        <p><strong>$ export VARNAME</strong><br />
        </p>
        <p>This  export   includes changes to existing variables that  are  in  the path. for example, if  we wish  to modify the PATH environment variable we  would:<br />
        </p>
        <p><strong>$ PATH=$PATH: additional_directory</strong><br />
          <strong>$ export PATH</strong><br />
        </p>
        <p><strong>1.5. Positional (Parameter) Variables</strong><br />
        When the shell script is run, any  command line parameters to the shell are provided by a set of shell variables  $0 $1 $2 $3 $4 $5 $6 $7 $8 and $9.<br />
          $0 (or ${0}) contains the name of  the shell script itself, and depending on how the shell was called, may  contain the full path to the command. If  there are more than 9 parameters/arguments to the script, then they are accessed  using the shift command which  shifts all  the parameters ($1=$2, $2=$3 etc) with $9 getting  the next   parameter in  the line ($0 is  unaffected).<br />
          $# is a variable that contains  the number of command line parameters.<br />
          $* and  $@  can  be  used   to  get all the parameters  in   one  go. Very useful for  passing the complete  command   line parameter set to a child process<br />
        </p>
        <p><strong>Example</strong><br />
          <strong>!/bin/sh</strong><br />
        </p>
        <p>A wrapper for the GNU C compiler  that has the debug flag set<br />
        </p>
        <p><strong>$ gcc -g $*</strong><br />
        </p>
        <p>Note:</p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="109" valign="top"><br />
              $* and $@ </td>
            <td width="529" valign="top"><p>are the same except when placing quotes around    them</p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p align="center">&quot;$*&quot;</p></td>
            <td width="529" valign="top"><p>is the same as      &quot;$1 $2 $3...&quot;</p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p align="center">&quot;$@&quot;</p></td>
            <td width="529" valign="top"><p>is the same as      &quot;$1&quot; &quot;$2&quot; &quot;$3&quot;...</p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p align="center">$?</p></td>
            <td width="529" valign="top"><p>The exit status (error code) of the last command</p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p align="center">$$</p></td>
            <td width="529" valign="top"><p>The PID of the current command - Useful for    creating uniquely named temp files (eg: tmp.$$)</p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p align="center">$!</p></td>
            <td width="529" valign="top"><p>The process id of the last command started in the    background (with &amp;)</p></td>
          </tr>
        </table>
        <p><strong>Example:<br />
        </strong></p>
        <p>Write these lines in a file<br />
        </p>
        <p><strong>Echo &ldquo;First argument is $1&rdquo;</strong><br />
          <strong>Echo &ldquo;Second argument is $2&rdquo;</strong><br />
          <strong>Echo &ldquo;The   Total number of  arguments are $#&rdquo;</strong><br />
          <strong>Echo &ldquo;The   list of arguments are $*&rdquo;</strong><br />
          <strong>Echo &ldquo;The pid of the current process is $$&rdquo;</strong><br />
          <strong>Echo &ldquo;The   name of the file where we written this program is $0&rdquo;</strong><br />
          <strong>Echo &ldquo;The exit status of last command $?&rdquo;</strong><br />
          <strong>Result:</strong><br />
        </p>
        <p>Execute the above program  using   some command line arguments like<br />
          <strong>$ sh &lt;filename&gt;  1 2 3 4 5</strong><br />
        </p>
        <p><strong>1.6 Quoting</strong><br />
        </p>
        <p>Before passing any arguments to a  program the shell tries to expand wildcards and variables. To expand means that  the wildcard (e.g. *) is replaced by the appropriate  file names or that a variable is replaced by  its value. To change this behaviour we can use quotes: Let's say we have a number  of files in the current directory. Two of them are jpg-files, mail.jpg and  tux.jpg.<br />
        </p>
        <p><strong>$ !/bin/sh</strong><br />
          <strong>echo *.jpg</strong><br />
        </p>
        <p>This will print &quot;mail.jpg  tux.jpg&quot;.<br />
          Quotes (single and double) will  prevent this wildcard expansion:<br />
        </p>
        <p><strong>$ !/bin/sh</strong><br />
          <strong>echo &quot;*.jpg&quot;</strong><br />
          <strong>echo '*.jpg'</strong><br />
        </p>
        <p>This will print &quot;*.jpg&quot;  twice.<br />
          Single quotes are most strict.  They prevent even variable expansion. Double quotes prevent  wildcard expansion but allow variable  expansion:<br />
        </p>
        <p><strong>$ !/bin/sh</strong><br />
          <strong>echo $SHELL</strong><br />
          <strong>echo &quot;$SHELL&quot;</strong><br />
          <strong>echo '$SHELL'</strong><br />
        </p>
        <p>This will print:<br />
        </p>
        <p><strong>/bin/bash</strong><br />
          <strong>/bin/bash</strong><br />
          <strong>$SHELL</strong><br />
        </p>
        <p>Finally  there   is  the  possibility   to  take  the   special  meaning  of   any  single  character   away  by  preceeding   it  with  a backslash:<br />
        </p>
        <p><strong>echo \*.jpg</strong><br />
          <strong>echo \$SHELL</strong><br />
        </p>
        <p>This will print:<br />
          <strong>*.jpg</strong><br />
          <strong>$SHELL</strong><br />
        <div id=1202></div>
        <h2><strong>2. shift: Shifts Parameters</strong></h2>
          <p><br />
        When  a   large  number  of   parameters  (;SPMgt;  9)   are  passed  to   the  shell, shift can  be   used  to  read   those parameters. If the number of parameters to be read is known, say  three, a program similar to the   following could be written:<br />
          </p>
        <p><strong>$!/bin/sh</strong><br />
            <strong>echo  The first parameter is $1.</strong><br />
            <strong>shift</strong><br />
            <strong>echo  The second parameter is $1.</strong><br />
            <strong>shift</strong><br />
            <strong>echo  The third parameter is $1.</strong><br />
            <strong>exit  0</strong><br />
            </p>
            <div id=1203></div>
          <p><h2><strong>3. read: Reading Input from User</strong></h2>
          <p><br />
          The following short example shows  how read can be used to get input from the user:<br />
          </p>
          <p><strong>#!/bin/sh</strong><br />
          <strong>echo  -e &quot;Please enter your name: \c&quot;</strong><br />
          <strong>read  NAME</strong><br />
          <strong>echo  &quot;Your name is $NAME.&quot;</strong><br />
          <strong>exit  0</strong><br />
          </p>
          <p>The \c means  that the line feed will be suppressed, so that the prompt sits at the end of  the line, not at the beginning of the following line.<br />
          Two more common controls  available to the <strong><em>echo </em></strong>command are to use \n to add a line feed, and \t to add a  tab. Multiple values may be read on a single line by using:<br />
          </p>
          <p><strong>$!/bin/sh</strong><br />
          <strong>echo  -e &quot;Please enter two numbers: \c&quot;</strong><br />
          <strong>read  NUM1 NUM2</strong><br />
          <strong>echo  The numbers entered are $NUM1 and $NUM2</strong><br />
          <strong>exit  0</strong><br />
          </p>
          <p>This ensures that if two numbers  are entered on a single line, they will be read within two variables. If three  numbers were entered, the second variable (NUM2) would contain the last two  numbers. <br />
          Assuming three numbers were  the   input of the above  example,  the first two   numbers  could  be   assigned to the  first variable by  entering them as<br />
          </p>
          <p><strong>num1 \num2 num3</strong><br />
          </p>
          <p>The backslash ( \) allows the  blank space between num1 and num2 to be part of the variable (ordinarily,  spaces are used as <strong>field seperators.</strong><br />
          <div id=1204></div>
        <h2><strong>4. Conditional Statements</strong></h2>
        <p><br />
            <strong>4.1. if Statements</strong><br />
          The  core   condi3tional concept of wrapping   a block of statements  that is  only  to   be  processed <strong><em>if</em></strong> some condition  is met.          Shells also support <strong><em>else</em></strong> and  the combined <strong><em>elif</em></strong> else-if  condition,   3  basic  layouts for   if  statements  are   shown below.  Note  the   use of the then and  keyword  to separate   the condition commands from internal   command block, and the <strong><em>fi</em></strong> keyword to mark the end of the  block.<br />
        </p>
        <p><strong>First Model:</strong><br />
          <strong>if  condition-command</strong><br />
          <strong>then</strong><br />
          <strong>    command1</strong><br />
          <strong>    command2</strong><br />
          <strong>...</strong><br />
          <strong>fi</strong><br />
        </p>
        <p><strong>Second Model:</strong><br />
          <strong>if  condition-command</strong><br />
          <strong>then</strong><br />
          <strong>    commandA1</strong><br />
          <strong>    commandA2</strong><br />
          <strong>...</strong><br />
          <strong>else</strong><br />
          <strong>    commandB1</strong><br />
          <strong>    commandB2</strong><br />
          <strong>...</strong><br />
          <strong>fi</strong><br />
          <strong>Third model:</strong><br />
          <strong>if  condition-command-A</strong><br />
          <strong>then</strong><br />
          <strong>    commandA1</strong><br />
          <strong>    commandA2</strong><br />
          <strong>...</strong><br />
          <strong>elif  condition-command-B</strong><br />
          <strong>then</strong><br />
          <strong>    commandB1</strong><br />
          <strong>    commandB2</strong><br />
          <strong>...</strong><br />
          <strong>else</strong><br />
          <strong>    commandC1</strong><br />
          <strong>    commandC2</strong><br />
          <strong>...</strong><br />
          <strong>fi</strong><br />
        </p>
        <p>The commands inside the blocks  are used the same as any other command within the system, and it is possible to  nest  other  conditions   statements  inside  those   blocks.  For  conciseness,   many  people  will   use  the  semicolon   (;) command  separating  character   to  allow  the then keyword  to   be  placed   on   the  same  line   as  the if and  the condition-command. (Note that no  semicolon is needed after the then keyword)<br />
          The condition-command  is a   any command, and the if statement is   evaluated  based on the success  (exit status)  of that command.<br />
        </p>
        <p><strong>Example:</strong><br />
        </p>
        <p><strong>if ls -al ; then</strong><br />
          <strong>echo &quot;Directory was successfully  listed&quot;</strong><br />
          <strong>else</strong><br />
          <strong>echo &quot;Failed to list directory&quot;</strong><br />
          <strong>fi</strong><br />
        </p>
        <p><strong>4.2. The test or [ ] Command</strong><br />
          There are other types of tests  beyond running a simple command and checking its exit status. The shells  support a number for &quot;test&quot; commands that can be used to perform more  useful tests.<br />
          The test command has two formats:<br />
        </p>
        <p><strong>test  expression</strong><br />
          <strong>or</strong><br />
          <strong>[  expression  ]</strong><br />
        </p>
        <p>Note: for the [ ] version there  must be spaces between the brackets and the expression.<br />
          The test command/statement will  evaluate the expression and return a status of success if the expression is  true. The following tests can be performed:<br />
        </p>
        <p><strong>4.2.1 File Tests</strong>
          </p>
          </p>
        </p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="97" valign="top"><br />
              -r file </td>
            <td width="541" valign="top"><p>true if file is readable (by current user)</p></td>
          </tr>
          <tr>
            <td width="97" valign="top"><p align="center">-w file</p></td>
            <td width="541" valign="top"><p>true if file is writable (by current user)</p></td>
          </tr>
          <tr>
            <td width="97" valign="top"><p align="center">-c file</p></td>
            <td width="541" valign="top"><p>true if file is executable (by current user)</p></td>
          </tr>
          <tr>
            <td width="97" valign="top"><p align="center">-f file</p></td>
            <td width="541" valign="top"><p>true if file is an ordinary file</p></td>
          </tr>
          <tr>
            <td width="97" valign="top"><p align="center">-d file</p></td>
            <td width="541" valign="top"><p>true if file is a directory</p></td>
          </tr>
          <tr>
            <td width="97" valign="top"><p align="center">-s file</p></td>
            <td width="541" valign="top"><p>true if the length of file is &gt; 0</p></td>
          </tr>
          <tr>
            <td width="97" valign="top"><p align="center">-t</p></td>
            <td width="541" valign="top"><p>true if standard output is associated with a terminal</p></td>
          </tr>
          <tr>
            <td width="97" valign="top"><p align="center">-t fd</p></td>
            <td width="541" valign="top"><p>true if file descriptor 'fd' is associated with a terminal</p></td>
          </tr>
        </table>
        <p>An example would be where a program needs to output  something to a file, but first checks that the file exists:<br />
          </p>
        <p><strong>#!/bin/sh</strong><br />
          <strong>echo &ldquo;Enter the filename&rdquo;</strong><br />
          <strong>                read file1</strong><br />
          <strong>if [ ! -s file1 ] or if test ! –s  file1</strong><br />
          <strong>then</strong><br />
          <strong>    echo &quot;file1 is empty or does not  exist.&quot;</strong><br />
          <strong>    ls -l &gt; file1</strong><br />
          <strong>exit</strong><br />
          <strong>else</strong><br />
          <strong>    echo &quot;File file1 already exists.&quot;</strong><br />
          <strong>fi</strong><br />
          <strong>exit  0</strong><br />
          </p>
        <p><strong>4.2.2 String Tests</strong></p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="115" valign="top"><br />
              -z str </td>
            <td width="523" valign="top"><p>true if the length of str is zero</p></td>
          </tr>
          <tr>
            <td width="115" valign="top"><p align="center">-n str</p></td>
            <td width="523" valign="top"><p>true if the length of str is non zero</p></td>
          </tr>
          <tr>
            <td width="115" valign="top"><p align="center">str</p></td>
            <td width="523" valign="top"><p>true if the str is not empty</p></td>
          </tr>
          <tr>
            <td width="115" valign="top"><p align="center">str1     = str2</p></td>
            <td width="523" valign="top"><p>true if str1 and str2 are the same</p></td>
          </tr>
          <tr>
            <td width="115" valign="top"><p align="center">str1     != str2</p></td>
            <td width="523" valign="top"><p>true if str1 and str2 are different</p></td>
          </tr>
        </table>
        <p>An example would checks that the given strings are same or  not:<br />
          </p>
        <p><strong>#!/bin/sh</strong><br />
          <strong>echo  &ldquo;Enter the strings(string1,string2)&rdquo;</strong><br />
          <strong>read  str1</strong><br />
          <strong>read  str2</strong><br />
          <strong>if  test str1 = str2</strong><br />
          <strong>then</strong><br />
          <strong>    echo &quot;Both Strings are equal&quot;</strong><br />
          <strong>exit</strong><br />
          <strong>else</strong><br />
          <strong>    echo &quot;Given strings are not  equal&quot;</strong><br />
          <strong>fi</strong><br />
          <strong>exit  0</strong><br />
          </p>
        <p><strong>4.2.3 Numeric Tests</strong></p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="103" valign="top"><br />
              int1     -eq int2 </td>
            <td width="535" valign="top"><p>true if int1 = int2</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">int1     -ne int2</p></td>
            <td width="535" valign="top"><p>true if int1 != int2</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">int1     -lt int2</p></td>
            <td width="535" valign="top"><p>true if int1 &lt; int2</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">int1     -le int2</p></td>
            <td width="535" valign="top"><p>true if int1 &lt;= int2</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">int1     -gt int2</p></td>
            <td width="535" valign="top"><p>true if int1 &gt; int2</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">int1     -ge int2</p></td>
            <td width="535" valign="top"><p>true if int1 &gt;= int2</p></td>
          </tr>
        </table>
        <p><strong>Example:</strong><br />
          <strong>$!/bin/sh</strong><br />
          <strong>if  test $# -le 5</strong><br />
          <strong>then</strong><br />
          <strong>    echo Less than or equal to five parameters.</strong><br />
          <strong>else</strong><br />
          <strong>    echo More than 5 parameters.</strong><br />
          <strong>fi</strong><br />
          <strong>exit  0</strong><br />
          <br />
  <strong>4.2.4 Combining Operators</strong></p>
        <ul>
          <li>!      NOT  - Invert the result of the next expression</li>
          <li>-a     AND  - Only true if both prev and next expr are true</li>
          <li>-o      OR  - True if either prev or next  expr is true </li>
          <li>(  )   parentheses for grouping expressions</li>
        </ul>
        <p>All parameters to test must be  separated by spaces, including parentheses, operators and strings/integers.  Note, that test operates on  strings  (or strings containing integer numbers)  It  cannot process commands  directly, we must  use the back-quotes to perform command  substitution.<br />
          </p>
        <p><strong>if [ &quot;$HOME&quot; = `pwd` ] ; then  echo &quot;I am home&quot; ; fi</strong><br />
          </p>
        <p>Also double quoting of variable  is important within a test statement, as an undefined variable will resolve to  nothing which will not be correctly processed by the shell.<br />
          For example, if $HOME is  undefined<br />
  </p>
        <p><strong>if  [  $HOME = `pwd` ] ; then...</strong><br />
          </p>
        <p>will expand to be:<br />
          </p>
        <p><strong>if [ = /export/home/me ] ; then...</strong><br />
          </p>
        <p>Which is invalid.<br />
          </p>
        <p><strong>4.3. case  Statements</strong><br />
          When there are several different  sets of operations to be performed based on different values of a single  string, it can get  quite  messy  using  a   long  string  of   if,  elif,  elif,   elif,  else  statements   to  perform  the   operations. The case command allows a convenient structured method of  performing flow control through one of multiple blocks using pattern matching  of strings.<br />
          </p>
        <p><strong>$ case  string  in</strong><br />
          <strong>  pattern1 )  commands;;</strong><br />
          <strong>  pattern2 )  commands ;;</strong><br />
          <strong>  pattern3 )  commands ;;</strong><br />
          <strong>  ...</strong><br />
          <strong>  *)  commands ;;   # default case</strong><br />
          <strong>esac</strong><br />
          </p>
        <p>In addition, multiple  pattern options can be specified for a  single case   using pattern1a | [I pattern1b] style blocks.<br />
          When specifying patterns,</p>
        <ul>
          <li>*      matches any string of zero or more characters</li>
          <li>?      matches any single character</li>
          <li>[ ]    matches any single character within the set</li>
          <li>[! ]   matches any single character not in the set</li>
        </ul>
        <p>These can be combined together to  form more advanced patterns:<br />
          [Yy]* Matches any string starting  with an upper or lower case y.<br />
          Use  quotes   or  escape/back-slash  the   special  characters  if  we  wish   to  pattern  match   them  specifically.<br />
  </p>
        <p><strong>$!/bin/sh</strong><br />
        </p>
        <p># an example with the case  statement, which reads a command from the user and processes it<br />
          </p>
        <p><strong>echo &quot;Enter your command (who, list, or cal)&quot;</strong><br />
          <strong>read command</strong><br />
          <strong>case &quot;$command&quot; in</strong><br />
          <strong>who)</strong><br />
          <strong>echo &quot;Running who...&quot;</strong><br />
          <strong>who</strong><br />
          <strong>;;</strong><br />
          <strong>list)</strong><br />
          <strong>  </strong><br />
          <strong>echo &quot;Running ls...&quot;</strong><br />
          <strong>ls</strong><br />
          <strong>;;</strong><br />
          <strong>cal)</strong><br />
          <strong>echo &quot;Running cal...&quot;</strong><br />
          <strong>cal</strong><br />
          <strong>;;</strong><br />
          <strong>*)</strong><br />
          <strong>echo &quot;Bad command, your choices are:  who, list, or cal&quot;</strong><br />
          <strong>;;</strong><br />
          <strong>esac</strong><br />
          <strong>exit 0</strong></p>
        <p><strong>4.4. while Statements .</strong><br />
        </p>
        <p>Similar to the basic if  statement, except the block  of commands  is repeatedly executed as long as the condition   is met.<br />
          </p>
        <p><strong>while condition-command</strong><br />
          <strong>do</strong><br />
          <strong>command1</strong><br />
          <strong>command2</strong><br />
          <strong>...</strong><br />
          <strong>done</strong><br />
          </p>
        <p>As with if statements, a  semicolon (;) can be used to remove include the do keyword on the same line as  the while condition-command statement.<br />
          The  example below   loops over  two  statements   as  long  as  the  variable i is  less than  or   equal  to  ten.   Store the following in a file named while1.sh and execute it<br />
          </p>
        <p><strong>$!/bin/sh</strong><br />
          </p>
        <p>Illustrates implementing a counter with a while loop<br />
          Notice how we increment the counter with <strong><em>expr </em></strong>in  backquotes<br />
          </p>
        <p><strong>i=&quot;1&quot;</strong><br />
          <strong>while  [ $i -le 10 ]</strong><br />
          <strong>do</strong><br />
          <strong>     echo &quot;i is $i&quot;</strong><br />
          <strong>     i=`expr $i + 1`</strong><br />
          <strong>done</strong><br />
          </p>
        <p><strong>4.5 until loop</strong><br />
          </p>
        <p>Execute statements as long as a condition is false<br />
          </p>
        <p><strong>until  grep &quot;sort&quot; dbase_log &gt; /dev/null</strong><br />
          <strong>do</strong><br />
          <strong>     sleep 10</strong><br />
          <strong>done</strong><br />
          <strong>echo  &quot;Database has been sorted&quot;</strong><br />
          </p>
        <p>Example executes until grep is unsuccessful<br />
          </p>
        <p><strong>4.6 for  Statement</strong><br />
          The <strong><em>for </em></strong>statement is used to  iterate/loop through a predefined list   of  values, setting a  shell variable to the current value each time  through the loop. Unlike many other languages shell for loops operate on word  lists, not integers with start and stop values.<br />
          </p>
        <p><strong>for  VAR in  wordlist</strong><br />
          <strong>do</strong><br />
          <strong>    commands</strong><br />
          <strong>    ...</strong><br />
          <strong>done</strong><br />
          <strong> Example:</strong><br />
          <strong>#!/bin/sh</strong><br />
          <strong>for  i in Claude Paul Wayne Roger Tom</strong><br />
          <strong>do</strong><br />
          <strong>echo  The name is $i.</strong><br />
          <strong>done</strong><br />
          <strong>exit  0</strong><br />
          </p>
        <p>Within  the   shell,  parameters  are read   as $1 for the first  parameter, $2  for  the   second parameter, $3 for the third parameter, and so on. $* is the  entire list of parameters. If the ``in list &quot; is omitted, the list taken  is the list of parameters passed to the shell on the command line.<br />
          Note: To excite above said  example programs we have to compile them in a file and excite that file. Like<br />
          <strong>$ sh &lt;filename&gt;</strong><br />
          <div id=1205></div>
        <h2><strong>5. Debugging</strong></h2>
        <p><br />
          The simplest debugging help  is   of  course the command  echo.  We  can   use  it  to   print specific variables   around  the place where  we suspect   the  mistake. This  is   probably what most  shell  programmers   use  80%  of   the  time to track down a mistake.  The advantage of a shell script is that it does not require any re-compilation  and inserting an &quot;echo&quot; statement is done very quickly. The shell has a real debug  mode  as well. If there is a mistake in  our script  &quot;strangescript&quot;  then we can debug it like this:<br />
        </p>
        <p><strong>$ sh -x strangescript</strong><br />
        </p>
        <p>This will execute the script and  show all the statements that get executed with the variables and  wildcards already expanded.<br />
          The shell also has a mode to  check for syntax errors without actually executing the program. To use this  run:<br />
        </p>
        <p><strong>$ sh -n our_script</strong><br />
          If this returns nothing then our  program is free of syntax errors.</p>
        </p>
      </div>   
      
  </div>
    
    
    <div class="right-pannel">
    	<div class="ad1"></div>
        <div class="ad2"></div>
    </div>
</div>

</body>
</html>
