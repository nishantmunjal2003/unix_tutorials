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
        <h1 align="center">Advanced Filters
</h1>
        <p><br />
        <div id=1001></div>
        <h2><strong>1. grep</strong></h2>
          <p>&nbsp;</p>
          <p>The grep program searches a file  or files for lines that have a certain pattern. The syntax is:<br />
          </p>
          <p><strong>$ grep &quot;pattern&quot; file(s)</strong><br />
          </p>
          <p>The name &quot;grep&quot; derives  from the ed (a Unix line editor) command g/re/p, which means &quot;globally search  for a regular expression and print all lines containing it.&quot; A regular  expression is either some plain text (a word, for example) and/or special  characters  used  for   pattern matching. When  we learn  more  about  regular expressions, we  can   use them  to specify complex  patterns of text.<br />
          The simplest use of grep is to  look for a pattern consisting of a single word. It can be used in a pipe so  that only those lines of the input files containing a given string are sent to  the standard output. But let's start with an example reading from  files:   searching all  files in  the   working directory for a   word--say, Unix. We'll  use  the   wildcard * to quickly give grep all filenames in the directory.<br />
          </p>
          <p><strong>$ grep &quot;Unix&quot; *</strong><br />
          <strong>ch01:Unix is a flexible and powerful operating  system</strong><br />
          <strong>ch01:When the Unix designers started work,  little did</strong><br />
          <strong>ch05:What can we do with Unix?</strong><br />
          <strong>$</strong><br />
          </p>
          <p>When grep searches multiple  files, it shows the filename where it finds each matching line of text.  Alternatively, if we don't give grep a filename to read, it reads its standard  input; that's the way all filter programs work:<br />
          </p>
          <p><strong>$ ls -l | grep &quot;Aug&quot;</strong><br />
          <strong>-rw-rw-rw-          1              john  doc             11008     Aug         6              14:10     ch02</strong><br />
          <strong>-rw-rw-rw-          1              john  doc             8515        Aug         6              15:30     ch07</strong><br />
          <strong>-rw-rw-r--            1              john  doc             2488        Aug        15            10:51     intro</strong><br />
          <strong>-rw-rw-r--            1              carol doc              1605       Aug         23           07:35      macros</strong><br />
          <strong>$</strong><br />
          </p>
          <p>First, the example runs ls -l to  list our directory. The standard output of ls -l is piped to grep, which only  outputs lines that contain the string Aug (that is, files that were last  modified in August). Because the standard output of grep isn't redirected,  those lines go to the terminal screen.<br />
          Grep options let we modify the  search. Given table lists some of the options.</p>
          </p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="103" valign="top"><br />
              <strong>Option</strong></td>
            <td width="535" valign="top"><p><strong>Description</strong></p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p>-v</p></td>
            <td width="535" valign="top"><p>Print all lines that do not match pattern.</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p>-n</p></td>
            <td width="535" valign="top"><p>Print the matched line and its line number.</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p>-l</p></td>
            <td width="535" valign="top"><p>Print only the names of files with matching lines    (lowercase letter &quot;L&quot;).</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p>-c</p></td>
            <td width="535" valign="top"><p>Print only the count of matching lines.</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p>-i</p></td>
            <td width="535" valign="top"><p>Match either upper- or lowercase.</p></td>
          </tr>
        </table>
        <p><strong>Some grep options</strong><br />
          Next, let's use a regular  expression that tells  grep to find lines  with  carol,  followed   by zero or more other characters (abbreviated in a regular expression as  &quot;.*&quot;), then followed by Aug:<br />
          [15] Note that the regular  expression for &quot;zero or more characters,&quot; &quot;.*&quot;, is  different than the corresponding filename wildcard &quot;*&quot;. W e can't  cover regular expressions in enough depth here to explain the  difference--though more-detailed books do. As a rule of thumb,  remember that the first argument to grep is a  regular expression; other arguments, if any, are filenames that can use  wildcards.<br />
  </p>
        <p><strong>$ ls -l | grep  &quot;carol.*Aug&quot;</strong><br />
          <strong>-rw-rw-r--   1 carol doc      1605 Aug 23 07:35 macros</strong><br />
          <strong>$</strong><br />
        <div id=1002></div>
        <h2><strong>2. sed</strong></h2>
          <p><br />
          sed (which stands for Stream EDitor) is a simple but  powerful computer program used to apply various pre-specified textual  transformations to a sequential stream of text data. It reads input files line  by line, edits each line according to rules specified in its simple  language  (the  sed script), and then outputs the line. While  originally created as a  Unix utility by  Lee E. McMahon of  Bell Labs from 1973 to  1974, sed is now available for virtually every operating system that supports a  command line.<br />
          </p>
          <p><strong>2.1 Functions</strong><br />
          sed is often thought of as a  non-interactive text editor. It differs from conventional text editors in that  the processing of the  two inputs is  inverted.  Instead of iterating once  through a  list of  edit commands   applying each one to the whole text   file  in  memory,   sed  iterates once  through   the  text  file   applying  the  whole   list of  edit  commands   to each line. Because only  one  line  at a  time   is in memory, sed can   process  text  files   with an arbitrarily-large   number  of lines. Some  implementations of sed can only process lines of limited lengths.<br />
          sed's command set is modeled  after the ed editor, and most commands work similarly in this inverted  paradigm. For example, the command 25d means if this is line 25, then delete  (don't output) it, rather than go to line 25 and delete it as it does  in ed. The   notable exceptions are the copy and move commands, which span a  range   of lines  and thus don't  have   straightforward  equivalents  in   sed.  Instead,  sed   introduces  an  extra   buffer  called  the   hold  space,  and additional commands to  manipulate   it.  The  ed command   to  copy  line   25  to line  76   (25t76) for  example  would   be coded  as two  separate   commands in sed  (25h; 76g),  to  store   the line  in  the   hold  space  until the point  at   which it should be retrieved.<br />
          </p>
          <p><strong>Usage:</strong><br />
          The following example shows a  typical usage of sed, where the -e option indicates that the sed expression  follows:<br />
          </p>
          <p><strong>$ sed -e 's/oldstuff/newstuff/g'  inputFileName &gt; outputFileName</strong><br />
          </p>
          <p>The s stands for  substitute; the g  stands for global, which means that all  matching occurrences  in the line would  be replaced. After the first slash is the regular expression to search for and  after  the second slash  is the expression to replace it with. The  substitute command (s///) is by far the most powerful and most commonly used  sed command.<br />
          Under Unix, sed is often used as  a filter in a pipeline:<br />
          </p>
          <p><strong>$ generate_data | sed -e 's/x/y/'</strong><br />
          </p>
          <p>That is, generate the data, but  make the small change of replacing x with y.<br />
          Several  substitutions   or  other  commands   can  be  put   together  in  a file   called, for  example,  subst. sed   and  then  be applied using the -f option to read the  commands from the file:<br />
          </p>
          <p><strong>$ sed -f subst.sed inputFileName &gt;  outputFileName</strong><br />
          </p>
          <p>Besides substitution, other forms  of simple processing are possible. For example, the following deletes empty  lines or lines that only contain spaces:<br />
          </p>
          <p><strong>$ sed -e '/^ *$/d' inputFileName</strong><br />
          </p>
          <p>This example used some of the  following regular expression meta characters:
          </p>
          </p>
        <ul>
          <li>-The caret (^) matches the beginning of the line.</li>
          <li>-The dollar sign ($) matches the end of the line.</li>
          <li>-A period (.) matches any single character.</li>
          <li>-The asterisk (*) matches zero or more  occurrences of the previous character.</li>
          <li>-A bracketed expression delimited by [ and ]  matches any of the characters inside the brackets.</li>
        </ul>
        <p>Complex sed constructs are  possible, to the extent that it can be conceived of as a highly specialised,  albeit simple, programming language. Flow of control, for example, can be  managed by use of a label (a colon followed by a string which is to be the label  name) and the branch instruction b; an instruction b followed by a valid label  name will move processing to the block following the label; if the label does  not exist then the branch will end the script.<br />
          A third one should be added to  remove all blanks and tabs immediately before the end of line:<br />
  </p>
        <p><strong>$ sed -e 's/#.*//' -e 's/[ ^I]*$//' -e  '/^$/ d'</strong><br />
          </p>
        <p>The  character   &quot;^I&quot;  is  a   CRTL-I  or  tab   character.  We  would   have  to  explicitly   type  in  the   tab.  Note  the   order  of operations  above,   which is in that  order for  a very   good reason. Comments might start in the middle of a line, with  white  space  characters   before  them.  Therefore   comments  are  first   removed  from  a   line,  potentially  leaving   white space characters that were before the comment. The second command  removes all trailing blanks, so that lines that are now blank are converted to  empty lines. The last command deletes empty lines. Together, the three commands  remove all lines containing only comments, tabs or spaces.<br />
          This demonstrates the pattern  space sed uses to operate on a line. The actual operation sed uses is:</p>
        <ul>
          <li>-Copy the input line into the pattern space.</li>
          <li>-Apply the first sed command on the pattern  space, if the address restriction is true.</li>
          <li>-Repeat with the next sed expression, again operating on the  pattern space.</li>
          <li>-When the last operation is performed, write out  the pattern space and read in the next line from the input file.</li>
        </ul>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="115" valign="top"><p>n</p></td>
            <td width="523" valign="top"><p>replace nth instance of pattern with replacement</p></td>
          </tr>
          <tr>
            <td width="115" valign="top"><p>g</p></td>
            <td width="523" valign="top"><p>replace all instances of pattern with replacement</p></td>
          </tr>
          <tr>
            <td width="115" valign="top"><p>p</p></td>
            <td width="523" valign="top"><p>write pattern space to STDOUT if a successful    substitution takes place</p></td>
          </tr>
          <tr>
            <td width="115" valign="top"><p>w file</p></td>
            <td width="523" valign="top"><p>Write the pattern space to file if a successful    substitution takes place</p></td>
          </tr>
        </table>
        <p><strong>2.2 Printing with p</strong><br />
          Another useful  command is the print command:  &quot;p.&quot;  If sed wasn't started  with an   &quot;-n&quot;  option, the  &quot;p&quot; command  will duplicate the input. The command<br />
  </p>
        <p><strong>$ sed 'p'</strong><br />
        </p>
        <p>will duplicate every line. If we  wanted to double every empty line, use:<br />
          </p>
        <p><strong>$ sed '/^$/ p'</strong><br />
          </p>
        <p>Adding the &quot;-n&quot; option  turns off printing unless we request it. Another way of duplicating head's  functionality is to print only the lines we want. This example prints the first  10 lines:<br />
          </p>
        <p><strong>$ sed -n '1,10 p' &lt;file</strong></p>
        <p><strong>2.3 Deleting with D</strong><br />
          </p>
        <p><strong>$ sed &lsquo;1,10 d&rsquo; &lt; file</strong><br />
        </p>
        <p><strong>2.4 Substituting with S</strong><br />
          Sed  has   several  commands,  but   most  people  only  learn  the   substitute  command:  s.  The  substitute command changes all occurrences of  the regular expression into a new value. A simple example is changing  &quot;day&quot; to&quot;night:&quot;<br />
  </p>
        <p><strong>$ sed s/day/night/ &lt;old &gt;new</strong><br />
        I didn't put quotes  around the argument  because this example didn't need  them.   If  we  read my   earlier tutorial, we would understand why it doesn't need quotes. If we  have meta-characters in the command, quotes are necessary. In any case, quoting  is a good habit, and I will henceforth quote future examples. That is:<br />
        </p>
        <p><strong>$ sed 's/day/night/' &lt;filename&gt;</strong><br />
          </p>
        <p>There are four parts to this  substitute command:</p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="97" valign="top"><br /><p align="center">s</p> </td>
            <td width="541" valign="top"><p>Substitute command</p></td>
          </tr>
          <tr>
            <td width="97" valign="top"><p align="center">/../../</p></td>
            <td width="541" valign="top"><p>Delimiter</p></td>
          </tr>
          <tr>
            <td width="97" valign="top"><p align="center">day</p></td>
            <td width="541" valign="top"><p>Regular Expression Pattern String</p></td>
          </tr>
          <tr>
            <td width="97" valign="top"><p align="center">night</p></td>
            <td width="541" valign="top"><p>Replacement string</p></td>
          </tr>
        </table>
        <p>We've covered quoting and regular  expression. That's 90% of the effort needed to learn the substitute command. To  put it another way, we already know how to handle 90% of the most frequent uses  of sed. There are a few fine points that must be covered.<br />
        <div id=1003></div>
        <h2><strong>3. awk</strong></h2>
          The name awk comes from the  initials of its designers: Alfred V. Aho, Peter J. Weinberger, and Brian W.  Kernighan. The  original  version   of  awk  was   written  in  1977   at  AT&amp;T  Bell   Laboratories.  In  1985  a  new   version  made  the programming  language   more  powerful,  introducing   user-defined  functions,  multiple   input  streams,  and   computed regular expressions. This new version became generally  available with Unix System V Release 3.1.<br />
          .awk is a programming language  designed to search for, match patterns, and perform actions on files. awk  programs are generally quite small, and are interpreted. This makes it a good  language for prototyping.</p>
        <p><strong>input lines to awk:</strong><br />
          When  awk scans   an input  line,  it   breaks it  down  into a   number  of  fields. Fields  are   separated  by  a   space  or  tab character. Fields are numbered beginning  at one, and the dollar symbol ($) is used to represent a field. For instance, the following line  in a file<br />
        </p>
        <p><strong>I like money.</strong><br />
          Has three fields. They are<br />
        </p>
        <p><strong>$1  I</strong><br />
          <strong>$2   like</strong><br />
          <strong>$3   money.</strong><br />
        </p>
        <p>Field zero ($0) refers to the  entire line. awk scans lines from a file(s) or standard input.<br />
          Note: The most frustrating thing  about trying to learn awk is getting our program  past the shell's parser. The proper way is to  use single quotes around the program, like so:<br />
        </p>
        <p><strong>$ awk '{print $0}' filename</strong><br />
          The single quotes protect almost  everything from the shell. In csh or tcsh, we still have to  watch out for exclamation marks, but other  than that, we're safe.<br />
        </p>
        <p><strong>$ awk '{print $2,$1}' filename</strong><br />
        Will print the second field, then  the first. All other fields are ignored</p>
        <ul>
          <li>-Variables</li>
          <ul>
            <li>-Need not be declared </li>
            <li>-May contain any type of data, their data type  may change over the life of the program</li>
            <li>-As in C, case matters; since all the built-in  variables are all uppercase, avoid this form.</li>
            <li>-Some of the commonly used built-in variables  are:</li>
            <ul>
              <li>NR-- The current line's sequential number</li>
              <li>NF-- The number of fields in the current line</li>
              <li>FS-- The input field separator; defaults to  whitespace and is reset by the -F command line parameter</li>
              <li>OFS-- Output Field Separator default ' '</li>
            </ul>
            <li>-RS-- Input Record Separator default \n</li>
            <li>-FILENAME-- The name of the file currently being  processed</li>
          </ul>
          <li>-Fields</li>
          <ul>
            <li>-Each  record is separated into fields named $1, $2 , etc</li>
            <li>-$0 is the entire record </li>
            <li>-NF contains the number of fields in the current  line</li>
          </ul>
          <li>-Print</li>
          <ul>
            <li>-print prints each of the values of $1 through  $NF separated by OFS then prints a \n -onto stdout; the default value of OFS is  a blank</li>
          </ul>
        </ul>
        <p><strong>Example:</strong><br />
          See a file(sample) contains these  contents.<br />
          ramu:8:17:d<br />
          RAMU:8:17:D<br />
          king:89:37:j<br />
          smith:8:17:c<br />
          scott:19:4:d<br />
          allen:73:99:f<br />
          <br />
  <strong>$ awk –F &ldquo;:&rdquo; &lsquo;NR==1{print $1,$4}&rsquo; sample</strong><br />
  <strong>ramu d</strong><br />
  <strong>$ awk –F &ldquo;:&rdquo; &lsquo;NR==1 || NR==2 {print $0}&rsquo; sample</strong><br />
  <strong>ramu 8 17 d</strong><br />
  <strong>RAMU 8 17 D</strong></p>
        <p>BEGIN and END are special  patterns. They are not used to match input records. Rather, they are used for  supplying start-up or clean-up information   to our awk script. A BEGIN rule   is executed, once,  before the  first input record  has been read. An END  rule is executed, once, after all the input has been read. For example:<br />
        </p>
        <p><strong>Example1:</strong><br />
          Program to count number of  records and Number of fields<br />
  </p>
        <p><strong>awk  'BEGIN{FS=&quot;:&quot;;OFS=&quot;#&quot;;print &quot;Student info&quot;}</strong><br />
          <strong>{print $1,$3}</strong><br />
          <strong>END{print  &quot;**************************&quot;}</strong><br />
          <strong>END{print &quot;The Number Of records  are&quot; NR}</strong><br />
          <strong>END{print  &quot;**************************&quot;}</strong><br />
          <strong>END{print &quot;The Number Of Fields   are&quot; NF}</strong><br />
          <strong>END{print &quot;**************************&quot;}' sample</strong><br />
          </p>
        <p><strong>Result:</strong><br />
          <strong>Student  info</strong><br />
          <strong>ramu#17</strong><br />
          <strong>RAMU#17</strong><br />
          <strong>king#37</strong><br />
          <strong>smith#17</strong><br />
          <strong>scott#4</strong><br />
          <strong>allen#99</strong><br />
          <strong>**************************</strong><br />
          <strong>The  Number Of records are6</strong><br />
          <strong>**************************</strong><br />
          <strong>The  Number Of Fields  are4</strong><br />
          <strong>**************************</strong><br />
          </p>
        <p><strong>Example2:</strong><br />
          Program to find out idle users<br />
          <strong>who -i|tr -s &quot; &quot;|awk -F &quot; &quot; '$6 !~/\./{print  $1,$2,$6}' &gt;smith</strong><br />
          <strong>clear</strong><br />
          <strong>awk 'BEGIN{FS=&quot; &quot;;OFS=&quot;\t&quot;;print  &quot;***************************&quot;}</strong><br />
          <strong>BEGIN{print &quot;IDLE USERS ARE&quot;;print  &quot;**************************&quot;;print &quot;username</strong><br />
          <strong>TTy   IDLETIME&quot;}</strong><br />
          <strong>{print $1,$2,$3}</strong><br />
          <strong>END{print &quot;*****************************&quot;}' smith</strong><br />
          <strong>Result:</strong><br />
          <strong>**************************</strong><br />
          <strong>IDLE USERS ARE</strong><br />
          <strong>**************************</strong><br />
          <strong>username  TTy   IDLETIME</strong><br />
          <strong>uf027  pts/2  01:48</strong><br />
          <strong>uf088  ttyW1  00:02</strong><br />
          <strong>srujana  ttyW1  00:02</strong><br />
          <strong>**************************</strong><br />
          </p>
        <p><strong>Example3:</strong><br />
          Program to count characters in a given file<br />
          <strong>clear</strong><br />
          <strong>echo &quot;Enter the file name&quot;</strong><br />
          <strong>read name</strong><br />
          <strong>awk 'BEGIN{print &quot;***************************&quot;;print  &quot;The length of a given</strong><br />
          <strong>file is&quot;;print &quot;*****************************&quot;}</strong><br />
          <strong>{len=length($0);x=len+x}END{print &quot;the length of is&quot;x}' $name</strong></p>
        <p><strong>Note:</strong><br />
        Write these  programs in a file and then execute them with sh &lt;file name&gt; to get the  desired results.</p>
        <p><strong>String functions:</strong><br />
          These are additional functions we can use with awk</p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="155" valign="top"><br />
              sub(regexp,sub) </td>
            <td width="483" valign="top"><p>Substitute sub for regexp in $0</p></td>
          </tr>
          <tr>
            <td width="155" valign="top"><p>sub(regexp,sub,var)</p></td>
            <td width="483" valign="top"><p>Substitute sub for regexp in var</p></td>
          </tr>
          <tr>
            <td width="155" valign="top"><p>gsub(regexp,sub)</p></td>
            <td width="483" valign="top"><p>Globally substitute sub for regexp in $0</p></td>
          </tr>
          <tr>
            <td width="155" valign="top"><p>gsub(regexp,sub,var)</p></td>
            <td width="483" valign="top"><p>Globally substitute sub for regexp in var</p></td>
          </tr>
          <tr>
            <td width="155" valign="top"><p>split(var,arr)</p></td>
            <td width="483" valign="top"><p>Split var on white space into arr</p></td>
          </tr>
          <tr>
            <td width="155" valign="top"><p>split(var,arr,sep)</p></td>
            <td width="483" valign="top"><p>Split var on white space into arr on sep as separator</p></td>
          </tr>
          <tr>
            <td width="155" valign="top"><p>index(bigvar,smallvar)</p></td>
            <td width="483" valign="top"><p>Find index of smallvar in bigvar</p></td>
          </tr>
          <tr>
            <td width="155" valign="top"><p>match(bigvar,expr)</p></td>
            <td width="483" valign="top"><p>Find index for regexp in bigvar</p></td>
          </tr>
          <tr>
            <td width="155" valign="top"><p>length(var)</p></td>
            <td width="483" valign="top"><p>Number of characters in var</p></td>
          </tr>
          <tr>
            <td width="155" valign="top"><p>substr(var,num)</p></td>
            <td width="483" valign="top"><p>Extract chars from position num to end</p></td>
          </tr>
          <tr>
            <td width="155" valign="top"><p>substr(var,num1,num2)</p></td>
            <td width="483" valign="top"><p>Extract chars from num1 through num2</p></td>
          </tr>
          <tr>
            <td width="155" valign="top"><p>sprintf(format,vars)</p></td>
            <td width="483" valign="top"><p>Format vars to a string</p></td>
          </tr>
          <tr>
            <td width="155" valign="top"><p>getline</p></td>
            <td width="483" valign="top"><p>reads in a line each time it is called</p></td>
          </tr>
        </table>
        <p>&nbsp;</p>
<p>
      </div>   
      
  </div>
    
    
    <div class="right-pannel">
    	<div class="ad1"></div>
        <div class="ad2"></div>
    </div>
</div>

</body>
</html>
