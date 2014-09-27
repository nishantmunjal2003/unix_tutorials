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
        <h1 align="center">	Wildcards in UNIX</h1>
        <div id='401'></div>
        <p><h2><strong>1. How to  use UNIX Wildcards</strong></h2>
        <p><br />
          Many  computer   operating  systems  provide   ways  to  select   certain  files  without   typing  complete  filenames.   For example, we may wish to remove all files whose names end with &quot;old&quot;.  Unix allows us to use wildcards (more formally known as metacharacters ) to  stand for one or more characters in a filename.<br />
          The two basic wildcard  characters  are ?  and *. The wildcard ? matches any one  character. The wildcard * matches any grouping of  zero  or  more  characters.  Some examples   may help to  clarify  this. (Remember that  Unix   is  case-sensitive). Assume that  your directory contains the following files:<br />
        </p>
        <p><strong>Chap                      bite                         bin</strong><br />
          <strong>bit                         Chap6                    it</strong><br />
          <strong>test.new                                              abc</strong><br />
          <strong>Lit  site                                                 test.old</strong><br />
          <strong>Big  snit                                                bin.old</strong><br />
        </p>
        <p><strong>1.1 The ?  wildcard</strong><br />
          The command ls will list all the files. The command<br />
        </p>
        <p><strong>$ ls ?bit</strong><br />
          <strong>Lit  bit</strong><br />
        </p>
        <p>lists only the files Lit and bit. The file snit was not  listed because it has two characters before &quot;it&quot;. The file it  was   not listed because it has no characters before &quot;it&quot;.<br />
          The ? wildcard may be used more than once in a command. For  example,<br />
        </p>
        <p><strong>$ ls ?i?</strong><br />
          <strong>Lit  big  bin   bit</strong><br />
        </p>
        <p>Finds any files with &quot;i&quot; in the middle, one  character before and one character after.</p>
        </p>
        <p><strong>1.2 The *  wildcard</strong><br />
          The * wildcard is more   general.  It matches zero  or any number   of  characters, except that it  will not match a period that is the first character of a name.<br />
        </p>
        <p><strong>$ ls *t</strong><br />
          <strong>Lit  bit  it   snit</strong><br />
        </p>
        <p>Using this wildcard finds all the files with &quot;it&quot;  as the last two characters of the name (although it would not have found a file  called .bit).<br />
          We could use this wildcard to remove all files in the  directory whose names begin with &quot;test&quot;. The command to do this is<br />
        </p>
        <p><strong>$rm test*</strong><br />
        </p>
        <p>Be careful when using the * wildcard, especially with the rm  command. If we had mistyped this command by adding a space between test and *,  Unix would look first for a file called test, remove it if found, and then  proceed to remove all the files in the directory!<br />
        </p>
        <p><strong>1.3  Matching a range of characters with [ ]</strong><br />
        The ? wildcard matches any one character. To restrict the  matching to  a particular character or  range of characters, use square brackets [ ] to include a list. For example, to  list files ending in &quot;ite&quot;, and beginning with only &quot;a&quot;,  &quot;b&quot;, &quot;c&quot;, or &quot;d&quot; we would use the command:<br />
        </p>
        <p><strong>$ ls [abcd]ite</strong><br />
          This would list the file bite, but not the file site. Note  that the sequence [ ] matches only one character. If we had a file called  delite, the above command would not have matched it.<br />
          We can also specify a   range of characters  using  [  ].  For instance,  [1-3] will match the  digits 1, 2   and 3, while[A-Z] matches all capital letters.<br />
        </p>
        <p><strong>ls [A-Z]it</strong><br />
          Will find any file ending in  &quot;it&quot; and beginning with a capital letter (in this case, the file  Lit).<br />
          Wildcards can also be combined  with [ ] sequences. To list any file beginning with a capital letter, we would  use:<br />
        </p>
        <p><strong>$ ls [A-Z]*</strong><br />
          <strong>Chap1 Chap6 Lit</strong></p>
        <p><strong>1.4  Matching a string of characters with { }</strong><br />
          The method described in the previous section matches a  single character or range of characters. It is also possible to match a  particular string by  enclosing the  string in { } (braces).  For example, to  list only the files ending in the string &quot;old&quot;, we would use<br />
        <p><strong>$ ls *{old}</strong><br />
          <strong>bin.old  test.old</strong><br />
        <p>To list all files ending in either &quot;old&quot; or  &quot;new&quot;, use<br />
          <strong>$ ls *{old,new}</strong><br />
          <strong>bin.old  test.new  test.old</strong><br />
        <div id='402'></div>
        <h2><strong>2. I/O  Redirection</strong></h2><br />
  <strong>2.1  Standard File Descriptors</strong><br />
          The Unix environment allows for each process to have access  to three standard file descriptors by default. They are</p>
        <ul>
          <li>0 standard input </li>
          <li>1 standard output</li>
          <li>2 standard error</li>
        </ul>
        <p>It is the responsibility of the  shell when executing a command to provide appropriate file descriptors to the  process for each of these standard files. Most Unix tools are developed  to  take  their input from the standard input file and  write their output to the standard   output  file. Error messages that  do not make up part of the expected output are usually written to the standard  error file.<br />
          Unless otherwise specified,  the   shell  will  usually pass   it's own  standard file  descriptors down to the process that  it executes, allowing the output from any  called tools to be included with the output of the script.<br />
          Through using I/O redirection,  the developer can modify how the shell handles the file descriptors and usually  either replace one of the standard interactive file descriptors with a file on  disk, or create a  pipe to  connect the output file descriptor of one  process to the input file descriptor of another process.<br />
          Redirection can also be used to  perform redirection on file descriptors for a group of commands.<br />
  </p>
        <p><strong>2.2 Basic  File Redirection</strong></p>
        <ul>
          <li>Disk file redirection is done using the &lt; and  &gt; characters.</li>
          <li>&gt; redirects the standard output of the  command to write to a file</li>
          <li>&gt;&gt; redirects the standard output of the  command to append to a file</li>
          <li>&lt; redirects the standard input of the command  to read from a file</li>
        </ul>
        <p><strong>Example:</strong><br />
          <strong>$ ls -al&gt;dirlist.txt</strong><br />
          <strong>$ ls -al&gt;&gt; longlist.txt</strong><br />
          <strong>$ cat a&gt;f1</strong><br />
        </p>
        <p>For the redirections, the standard file description  redirection can be modified by placing the file descriptor identifier in front  of the redirection symbol.<br />
          For example 2&gt; redirects standard error instead of the  default standard input. 1&gt; redirects standard output,  which is the default setting.<br />
        </p>
        <p><strong>Example:</strong><br />
          <strong>$ command &gt; output.log 2&gt;error.log</strong><br />
        </p>
        <p><strong>2.3  Advanced File Redirection</strong><br />
          &gt;&amp; is used to redirect one file descriptor to  another.<br />
          </p>
        <p><strong>Example:</strong><br />
          <strong>$ command &gt; common.log 2&gt;&amp;1</strong><br />
          This  redirects  standard   output  to  common.log,   and  then  redirects   standard  error  to   the  same  place   as  standard output. The order of  these  redirections is  important, if the 2&gt;&amp;1 is  placed   before  the &gt;common.log,  then   standard error will be redirected to the standard output (console) then  standard output will be redirected to common.log.<br />
          &lt;&lt; redirects the standard input of the command to read  from what is called a &quot;here document&quot;. Here documents are convenient  ways of placing several lines of text within the script itself, and using them  as input to the command. The<br />
          &lt;&lt; Characters are followed by a single word that is  used to indicate the end of file word for the Here Document. Any word can be  used, however there is a common convention of using EOF (unless we need to  include that word within your here document).<br />
          </p>
        <p><strong>Example:</strong><br />
          <strong>$ sort &lt;&lt; EOF</strong><br />
          <strong>bravo</strong><br />
          <strong>delta</strong><br />
          <strong>alpha</strong><br />
          <strong>chrlie</strong><br />
          <strong>EOF</strong><br />
          </p>
        <p>This would be the same as having a text file with the lines  &quot;bravo&quot;, &quot;delta&quot;, &quot;alpha&quot; and &quot;charlie&quot;  in it and redirecting it using sort   &lt;input.txt  but  is simpler   and cleaner (no  problems  with  accidentally forgetting to include  the input.txt file when we distribute your script)</p>
<h2>&nbsp;</h2>
      </div>   
      
  </div>
    
    
    <div class="right-pannel">
    	<div class="ad1"></div>
        <div class="ad2"></div>
    </div>
</div>

</body>
</html>
