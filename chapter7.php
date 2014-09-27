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
        <h1 align="center">Pipes and Filters</h1>
        <p><h2><strong>1. Pipes  and Filters</strong></h2>
        <p><br />
          The  purpose   of  this lesson is  to   introduce  us  to  the  way  that we  can   construct  powerful  Unix   command  lines by combining Unix  commands.<br />
        </p>
        <p><strong>1.1  Concepts</strong><br />
          Unix  commands alone  are powerful,   but  when  we   combine  them together, we  can  accomplish complex tasks with ease.  The way we combine Unix commands is through using pipes and filters.<br />
        </p>
        <p><strong>1.2 using a  Pipe</strong><br />
          The symbol | is the Unix pipe  symbol that is used on the command line. What it means is that the standard  output of the command to the left of the pipe gets sent as standard input of  the command to the right of the pipe. Note that this functions  a lot like   the  &gt; symbol used to  redirect  the standard output  of a   command to  a file.  However, the pipe is different because it is  used to pass the output of a command to another command, not a file.<br />
          Here is an example:<br />
        </p>
        <p><strong>$ cat apple.txt</strong><br />
          <strong>core</strong><br />
          <strong>worm seed</strong><br />
          <strong>jewel</strong><br />
          <strong>$ cat apple.txt | wc</strong><br />
          <strong>3       4      21</strong><br />
          <strong>$</strong><br />
        </p>
        <p>In this example, at the first  shell prompt, we show the contents of the file apple.txt to us. In the next  shell prompt, we use  the  cat command   to  display  the   contents  of  the   applex.txt file, but we  sent  the  display not  to   the  screen,  but through a pipe to the wc (word count)  command. The wc command then does its job and counts the lines, words, and  characters of what it got as input.<br />
          We can combine many commands  with   pipes  on  a   single  command  line.   Here's  an  example where we  count   the characters, words, and lines of the apple.txt file, then mail the  results to nobody@december.com with the subject line &quot;The count.&quot;<br />
        </p>
        <p><strong>$ cat apple.txt | wc | mail -s &quot;The count&quot;  nobody@december.com</strong><br />
        </p>
        <p><strong>1.3 using  filter</strong><br />
          In UNIX and UNIX-like operating systems, a filter is program  that gets most of its data from standard input (the main input stream) and  writes its main results to standard output (the main output  stream). UNIX filters are often used as  elements of pipelines. The pipe operator (&quot;|&quot;) on a command line  signifies that the main output of the command to the left is passed as main  input to the command on the right.<br />
        List of UNIX filter programs        
        </p>
        <ul>
          <li>awk</li>
          <li>cut</li>
          <li>grep</li>
          <li>head</li>
          <li>sed</li>
          <li>sort</li>
          <li>tail</li>
          <li>tac</li>
          <li>tee</li>
          <li>tr</li>
          <li>uniq</li>
          <li>wc</li>
        </ul>
        <p><strong>1.3.1 head</strong><br />
          head is a program on Unix and  Unix-like systems used to display the first  few lines of a text file or piped data. The command-syntax is:<br />
        </p>
        <p><strong>$ head [options] &lt;file_name&gt;</strong><br />
        </p>
        <p>By default, head   will  print  the   first  10 lines of its  input   to  the  standard output. The number of lines  printed may be changed with a command line  option. The following example shows the first 20 lines of filename:<br />
        </p>
        <p><strong>$ head -20 filename</strong><br />
        </p>
        <p>This displays the first 5 lines of all files starting with  foo:<br />
        </p>
        <p><strong>$ head -5 foo*</strong><br />
        </p>
        <p><strong>1.3.2 tail</strong><br />
          tail is a   program  on  Unix   and  Unix-like  systems   used  to  display the last  few   lines  of  a text file or piped  data.   The command-syntax is:<br />
        </p>
        <p><strong>$ tail [options] &lt;file_name&gt;</strong><br />
        </p>
        <p>By default, tail will print the last 10 lines of its input  to the standard output. With command line options the number of lines printed  and the printing units (lines, blocks or bytes) may be changed. The following  example shows the last 20 lines of filename:<br />
        </p>
        <p><strong>$ tail -20 filename</strong><br />
        </p>
        <p>This example show all lines of filename after the first 2  lines:<br />
        </p>
        <p><strong>$ tail +2 filename</strong><br />
        </p>
        <p><strong>File  monitoring</strong><br />
          tail has a special command line option -f (follow) that  allows a file to be monitored. Instead of displaying the last few lines  and   exiting,  tail  displays   the  lines and then  monitors the   file.  As  new lines   are  added  to  the  file  by   another process, tail updates the display. This is particularly useful for  monitoring log files. The following command will display the last 10 lines of  messages and append new lines to the display as new lines are added to  messages:<br />
        </p>
        <p><strong>$ tail -f /var/adm/messages</strong><br />
        </p>
        <p>To interrupt tail while it is monitoring, break-in with  CTRL-C<br />
        </p>
        <p><strong>1.3.3 more</strong><br />
          more is better, isn't it?   Better than what? Better than the   cat command. cat dumps its arguments to stdout, which  is the terminal (unless we redirect it with  &gt; or &gt;&gt;). But what if we're working on your dissertation, and we'd  like to read it page by page, we'd use a command like:<br />
          <strong>$ more dissertation.txt</strong><br />
          This will generate a nice page-by-page display of your  masterpiece. Type<br />
          <strong>$ man more</strong><br />
          at a command prompt, and   check out the man page to get more details. Here we  are only   going to  tell us the most  important features of more ( i.e. the features that we use). There are three  important things we should know:<br />
          7.   Typing q while examining a file quits more<br />
          8.   Typing /SEARCHSTRING while examining a file searches for SEARCHSTRING<br />
        9.   more is a great example of a filter</p>
        <p><strong>1.3.4 less</strong><br />
          Opposite of the more command.<br />
          Both less and more display the contents of a file one screen  at a time, waiting for us to press the Spacebar between screens. This lets us  read text without it scrolling quickly off your screen. The less utility is  generally more flexible and powerful than more, but more is available on all  Unix systems while less may not be.<br />
          The less command is a pager that allows us to move forward  and backward (instead  of  only   forward,  as  the more pager behaves on some systems) when  output is displayed one screen at a time. :<br />
          To read the contents of a file named textfile in the current  directory, enter:<br />
  <strong>$ less textfile</strong><br />
          The  less  utility is often  used   for reading the output of other commands.  For   example, to read  the output of  the ls command one screen at a time, enter:<br />
  <strong>$ ls -la | less</strong><br />
          In both examples, we could substitute more for less with  similar results. To exit either less or more, press q . To exit less after  viewing the file, press q .<br />
  </p>
        <p><strong>1.3.5 wc</strong><br />
          In Unix, to get the line, word, or character count of a  document, use the wc command. At the Unix shell prompt, enter: wc filename  Replace   filename with the file or files for which we want information. For each  file, wc will output  three numbers. The  first is the line count, the second the word count, and the  third is the character count.  For example, if we entered wc .login, the  output would be something similar to the following:   38      135     847 .login To narrow  thefocus of your query, we may use one or more of the following wc options:</p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="103" valign="top"><br />
              <strong>Option</strong></td>
            <td width="535" valign="top"><p><strong>Entities counted</strong></p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p><strong>-c</strong></p></td>
            <td width="535" valign="top"><p>bytes</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p><strong>-l</strong></p></td>
            <td width="535" valign="top"><p>lines</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p><strong>-m</strong></p></td>
            <td width="535" valign="top"><p>characters</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p><strong>-w</strong></p></td>
            <td width="535" valign="top"><p>words</p></td>
          </tr>
        </table>
        <p>Note: In some versions of   wc,  the   -m   option  will  not  be  available or  -c   will   report  characters. However, in  most cases, the values for  -c  and   -m  are equal.<br />
          <strong>Syntax:</strong><br />
          To count the characters in a file.  Here it counts the no of characters in the  file abc.txt<br />
  <strong>$ Wc –c / abc.txt</strong><br />
          For example, to find out how many bytes are in the .login  file, we could enter:<br />
  <strong>$ wc -c .login</strong><br />
          We may also pipe standard output into wc to determine the  size of a stream. For example, to find out how many files are in a directory,  enter:<br />
  <strong>/bin/ls -l | wc -l</strong><br />
  </p>
        <p><strong>1.3.6 sort</strong><br />
          sort is a standard Unix command line program that prints the  lines of its input or concatenation of all files listed in it's argument list  in sorted order. The -r flag will reverse the sort order.<br />
          Example of sort in action:<br />
  <strong>$ cat phonebook</strong><br />
  <strong>Smith, Brett     555-4321</strong><br />
  <strong>Doe, John        555-1234</strong><br />
  <strong>Doe, Jane        555-3214</strong><br />
  <strong>Avery, Cory      555-4321</strong><br />
  <strong>Fogarty, Suzie   555-2314</strong></p>
        <p><strong>$ cat phonebook | sort</strong><br />
          <strong>Avery, Cory      555-4321</strong><br />
          <strong>Doe, Jane        555-3214</strong><br />
          <strong>Doe, John        555-1234</strong><br />
          <strong>Fogarty, Suzie   555-2314</strong><br />
          <strong>Smith, Brett     555-4321</strong><br />
          The -n option makes the program to sort according to  numerical value:<br />
  <strong>$ du /bin/* | sort -n</strong><br />
  <strong>4       /bin/domainname</strong><br />
  <strong>4       /bin/echo</strong><br />
  <strong>4       /bin/hostname</strong><br />
  <strong>4       /bin/pwd</strong><br />
  <strong>...</strong><br />
  <strong>24      /bin/ls</strong><br />
  <strong>30      /bin/ps</strong><br />
  <strong>44      /bin/ed</strong><br />
  <strong>54      /bin/rmail</strong><br />
  <strong>80      /bin/pax</strong><br />
  <strong>102     /bin/sh</strong><br />
  <strong>304     /bin/csh</strong><br />
        </p>
        <p>The -n +1 option makes the program to sort according to  numerical value, using the second column of data:<br />
          </p>
        <p><strong>$ cat zipcode</strong><br />
          <strong>Adam  12345</strong><br />
          <strong>Bob   34567</strong><br />
          <strong>Joe   56789</strong><br />
          <strong>Sam   45678</strong><br />
          <strong>Wendy 23456</strong></p>
        <p><strong>$ cat zipcode | sort -n +1</strong><br />
          <strong>Adam  12345</strong><br />
          <strong>Wendy 23456</strong><br />
          <strong>Bob   34567</strong><br />
          <strong>Sam   45678</strong><br />
          <strong>Joe   56789</strong><br />
          The -r option just reverses the order of the sort:<br />
  <strong>$ cat zipcode | sort -nr +1</strong><br />
  <strong>Joe   56789</strong><br />
  <strong>Sam   45678</strong><br />
  <strong>Bob   34567</strong><br />
  <strong>Wendy 23456</strong><br />
  <strong>Adam  12345</strong><br />
  </p>
        <p><strong>1.3.7 tr</strong><br />
          tr (abbreviated from translate or  transliterate) is a command in Unix-like operating systems.<br />
          When executed, the program reads from  the standard input and writes to the standard output. It takes as parameters  two  sets of characters, and replaces  occurrences of the characters in the   first  set with the  corresponding  elements from the other  set. The following inputs, for instance, shift the input letters of the  alphabet back by one character.<br />
  <strong>$ echo &quot;ibm 9000&quot; &gt;computer.txt</strong><br />
  <strong>$ tr a-z za-y &lt;computer.txt</strong><br />
  <strong>hal 9000</strong><br />
          Note: when ever we are using the &ldquo;tr&rdquo; operator we have to  use inpur rediction operator<br />
          In some older versions of tr (not POSIX-compliant), the  character ranges must be  enclosed in brackets, which must then be  quoted against interpretation by the shell:<br />
  <strong>$ tr &quot;[a-z]&quot; &quot;z[a-y]&quot; &lt;computer.txt</strong><br />
          If  it's   not known in advance  which  variant  of  tr   is  being invoked,  then   in this  example one  would have   to write  the ranges in  unabbreviated  form (tr  abcdefghijklmnopqrstuvwxyz zabcdefghijklmnopqrstuvwxy).  For   some applications,a  single  invocation   is  portable  despite containing  ranges: ROT13   can  be portably  implemented   as  tr  &quot;[A-M][N-Z][a-m][n-z]&quot;  &quot;[N-Z][A-M][n-z][a-m]&quot;. (This works because the brackets, which are  not part of the range syntax in POSIX tr, align   properly  in the  two strings, and hence will be safely  interpreted   as  a request to map  the bracket   character to itself.)<br />
          Perl also has a tr operator,  which operates analogously<br />
  </p>
        <p><strong>1.3.8 cut</strong><br />
          cut is a Unix command which is typically used to extract a  certain range of characters from a line, usually from a file.<br />
  <strong>Syntax</strong><br />
  <strong>cut [-c] [-f list] [-d delim] [-s] [file]</strong><br />
          Flags which may be used include</p>
        <ul>
          <li>-c Characters; a list following -c specifies a  range of characters which will be returned, e.g. cut -c1-66 would return the  first 66 characters of a line </li>
          <li>-f Specifies a field list, separated by a  delimiter </li>
          <li>list A comma separated or blank separated list  of integer denoted fields, incrementally ordered. The - indicator may be  supplied as shorthand to allow inclusion of ranges of fields e.g. 4-6 for  ranges 4 - 6 or 5 – as shorthand for field 5 to the end, etc.</li>
          <li>-d Delimiter; the character immediately  following the -d option is the field delimiter for use in conjunction with the  -f option; the default delimiter is tab. Space and other characters with  special meanings within the context of the shell in use must be enquoted or  escaped as necessary.</li>
          <li>-s Bypasses lines which contain no field  delimiters when -f is specified, unless otherwise indicated.</li>
          <li>file The file (and accompanying path if  necessary) to process as input. If no file is specified then standard input  will be used</li>
        </ul>
        <p><strong>Example</strong><br />
          Extract columns of data<br />
  <strong>$ cut -f -3,5,7-9 -d ' ' infile1 &gt; outfile1</strong><br />
  <strong>-f             2,4-6   field</strong><br />
  <strong>-c            35-44  character</strong><br />
  <strong>-d             ':'  delimiter (default is a tab)</strong><br />
  </p>
        <p><strong>1.3.9 paste</strong> <br />
          Paste is a Unix utility tool which is used to join files  horizontally (parallel merging), e.g. to join two similar length files which  are comma delimited. It is effectively the horizontal equivalent to the utility  cat command which operates on the vertical plane of two (or more) files, i.e.  by adding one file to another in order.<br />
  </p>
        <p><strong>Example</strong><br />
          To paste several columns of data together, enter:<br />
  <strong>$ paste who where when &gt; www</strong><br />
          This creates a file named www that contains the data  from the names  file in one column, the places file in  another, and the dates file in a third. If the names, places, and dates file  look like:<br />
  <strong>Who                      where                   when</strong><br />
  <strong>Sam                       Detroit                 January  3</strong><br />
  <strong>Dave                      Edgewood          February  4</strong><br />
  <strong>Sue                        Tampa                  March  19</strong><br />
          then the www file will contain:<br />
  <strong>Sam                       Detroit                 January  3</strong><br />
  <strong>Dave                      Edgewood          February  4</strong><br />
  <strong>Sue                        Tampa                  March  19</strong><br />
  </p>
        <p><strong>1.3.10 uniq</strong><br />
          uniq is a Unix utility which, when fed a text file, outputs  the  file with adjacent identical lines  collapsed to  one. It is a kind of filter  program.  Typically it is used after  sort. It can also output only the duplicate lines (with the -d option), or add  the number of occurrences of each line (with the -c option).<br />
          An example: To see the list of lines in a file, sorted by  the number of times each occurs:<br />
  <strong>$ sort file|uniq -c|sort -n</strong><br />
          Using uniq like this is common when building pipelines in  shell scripts.<br />
  <strong>Switches</strong></p>
        <ul>
          <li>-u Print only lines which are not repeated in  the original file</li>
          <li>-d Print one copy only of each repeated line in  the input file.</li>
          <li>-c Generate an output report in default style  except that each line is preceded by a count of the number of times it  occurred. If this option is specified, the -u and -d options are ignored if  either or both are also present.</li>
          <li>-i Ignore case differences when comparing lines</li>
          <li>-s Skips a number of characters in a line</li>
          <li>-w Specifies the number of characters to compare  in lines, after any characters and fields have been skipped</li>
          <li>--help Displays a help message</li>
          <li>--version Displays version number on stdout and  exits.</li>
        </ul>
      </div>   
      
  </div>
    
    
    <div class="right-pannel">
    	<div class="ad1"></div>
        <div class="ad2"></div>
    </div>
</div>

</body>
</html>
