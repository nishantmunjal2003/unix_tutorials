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
        <h1 align="center">$Find and other useful Commands
</h1>
		<div id="901"></div>
        <p><h2><strong>1. find</strong></h2>
          The &quot;find&quot; command is  very powerful. It can search the entire filesystem for one or more files that  we specify to look for. This is very helpful when a file has been  &quot;lost&quot;. <br />
          We can also use the find command  to locate  files,  and then perform  some type   of  action on  the   files  after  they've been located. With this capability,  we can locate files using powerful search criteria, and then run any Unix  command we want on the files we locate. (See the examples below.):<br />
          The find command allows the Unix  user to process a set of files and/or directories in a file subtree.<br />
        We can specify the following:        
        <ul>
          <li>-where to search (pathname)</li>
          <li>-what type of file to search for (-type:  directories, data files, links)</li>
          <li>-how to process the files (-exec: run a process  against a selected file)</li>
          <li>-the name of the file(s) (-name)</li>
          <li>-perform logical operations on selections (-o and  -a)</li>
        </ul>
        <p><strong>Syntax</strong><br />
          $ find  &lt;path&gt; options action<br />
          Major options of the find command  include</p>
        <ul>
          <li>-name : Finds files with certain naming  conventions in the directory structure </li>
          <li>-ctime <strong><em>time interval</em></strong>Locates files that that were created during the specified time  interval </li>
          <li>-mtime <strong><em>time interval</em></strong> Finds files that have  been modified during the specified time interval</li>
          <li>-atime <strong>time  interval </strong>Locates files that have been accessed during the specified time  interval </li>
          <li>-perm permissions Locates files with certain  permission settings</li>
          <li>-user Locates files that have specified  ownership </li>
          <li>-group Locates files that are owned by specified  group </li>
          <li>-size Locates files with specified size </li>
          <li>-type   Locates a certain type of file</li>
        </ul>
        <p>Time interval in options -ctime,  -mtime and -atime is an integer with optional sign.</p>
        <ul>
          <li>- n: If the integer n does not have sign this  means exactly n days ago, 0 means today.</li>
          <li>- +n:  if it  has plus sing, then it means &quot;more then n days ago&quot;, or older then n  ,</li>
          <li>- -n: if it has the minus sign, then it means less  than n days ago (-n), or younger then n.</li>
          <li>- It's evident that -1 and 0 are the same and  means &quot;today&quot;.</li>
        </ul>
        <p>It is possible to locate files  and directories that match or do not match multiple conditions, for example:</p>
        <ul>
          <li>-a to have  multiple conditions ANDed </li>
          <li>-o to have multiple conditions ORed</li>
          <li>-! to negate a condition </li>
          <li>-Expression to satisfy any complex condition</li>
        </ul>
        <p>It is possible to specify the action to be taken on the  files or directories that are found:</p>
        <ul>
          <li>-print prints the names of the files on standard  output (usually enabled by default) </li>
          <li>-exec command executes the specified command.</li>
        </ul>
        <p>The  most  common   reason  for  using   the  find  command   is  to  utilize  its   capability  to  recursively   process  the subdirectories. For  example, if we want to obtain a list of all files accessed in the last 24  hours, execute the following command:<br />
        </p>
        <p><strong>$ find . -atime 0 -print</strong><br />
          If the system administrator wants a list of .profile used by  all users, the following command should be executed:<br />
  </p>
        <p><strong>$ find / -name .profile -print</strong><br />
          We can also execute   the  find command with  multiple conditions.  If we wanted   to  find  a list   of files  that have  been modified in the last 24 hours and which  has a permission of 777, we would execute the following command:<br />
  </p>
        <p><strong>$ find . -perm 777  -a -mtime 0  –print</strong><br />
          </p>
        <p><strong>Total  Options:</strong></p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="103" valign="top"><br />
              -atime n </td>
            <td width="535" valign="top"><p>True if the file was accessed n days ago. find    updates the access times of the directories in the <em>pathname_list.</em></p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p>-ctime n</p></td>
            <td width="535" valign="top"><p>True if the file's status was changed n days ago.    A change to a file means the inode of the file was modified.</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p>-depth</p></td>
            <td width="535" valign="top"><p>Always true if specified on the command line.    Causes find to descend the directory structures and perform the specified    options on the subdirectories and files before processing the top directory.    We may find this useful when using find to pipe pathnames to cpio. If we do    not have write permission in directories this will allow we to transfer the    files to the archive file.</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p>-exec cmd</p></td>
            <td width="535" valign="top"><p>True if the command cmd executes successfully and    returns a zero exit status. We can use a set of braces ({}) to signify the    presence of the current pathname. The cmd command must end with an escaped    semicolon (\;). For example,<br />
              <strong>$ find .    -name '*.o' -exec rm {} \;</strong><br />
              Would remove all files ending with a .o from the    current directory structure.</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p>-group name</p></td>
            <td width="535" valign="top"><p>True if the file belongs to the group <em>name</em> .We may specify a group ID    instead of a group name.</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p>-inum n</p></td>
            <td width="535" valign="top"><p>True if the file has inode number n.</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p>-links n</p></td>
            <td width="535" valign="top"><p>True if the file has n links.</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p>-local </p></td>
            <td width="535" valign="top"><p>True if the specified file physically resides on    the local UNIX system. This is useful when searching directories on systems    that are networked together and share disk space.</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p>-mtime n</p></td>
            <td width="535" valign="top"><p>True if the file's contents were modified n days    ago.</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p>-name file</p></td>
            <td width="535" valign="top"><p>True if the filename matches file. The shell's    filename generation characters may be used ifenclosed in quotes. For example, <br />
              <strong>$ find . -name '*.c' –print</strong><br />
              Prints all files ending with a .c in the current    directory or any of its subdirectories.<strong></strong></p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p>-newer file</p></td>
            <td width="535" valign="top"><p>True if the current file is newer than the    specified file . The modification dates are compared to decide which is    newer.</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p>-nogroup</p></td>
            <td width="535" valign="top"><p>True if the file belongs to a group (groupid) not    in /etc/passwd.</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p>-nouser</p></td>
            <td width="535" valign="top"><p>True if the file belongs to a user (userid) not    in /etc/passwd.</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p>-ok cmd</p></td>
            <td width="535" valign="top"><p>Same as the -exec option except the command is    displayed followed by a question mark. The command cmd is executed only if we    respond with a y.</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p>-perm on</p></td>
            <td width="535" valign="top"><p>True if the permissions of the file match the octal    number on. Refer to Module 17 on chmod for a full description of the octal    number representation used for on . We can prefix on with a minus sign to    force the comparison of only the bits that are set in on to the file    permission.</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p>-print</p></td>
            <td width="535" valign="top"><p>Always true if specified on the command line.    Causes the current pathname to be displayed.</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p>-size n[c]</p></td>
            <td width="535" valign="top"><p>True if the file contains n blocks. If the n is    followed by c then n is counted in characters instead of blocks.</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p>-type c</p></td>
            <td width="535" valign="top"><p>True if the file type is type c , where c is one    of the following.</p></td>
          </tr>
        </table>
        <p>The find command checks the  specified options, going from left to right, once for each file or directory  encountered. The simplest invocation of find can be used to create a list of  all files and directories below the current directory:<br />
          </p>
        <p><strong>$ find . –print</strong><br />
          We can use regular expressions to  select files, for example those that have a .html suffix):<strong></strong><br />
  </p>
        <p><strong>$ find . -name &quot;*.html: -print</strong><br />
          We can search for files more  recent than, older than, or exactly the same age as a specified date,</p>
        <ul>
          <li>-n - more recent then n days old </li>
          <li>+n - older then n days old </li>
          <li>n  exactly  of age n</li>
        </ul>
        <p>Here are some useful examples. To  find html files that have been modified in the last seven days, we can use  –mtime with the argument -7 (include the hyphen):<br />
          </p>
        <p><strong>$ find . -mtime -7 -name &quot;*.html&quot;  -print</strong><br />
          If we just use  the number 7 (without a hyphen), we will  match only  html files that were modified  exactly seven days ago:<br />
  </p>
        <p><strong>$ find . -mtime 7 -name &quot;*.html&quot;  -print</strong><br />
          19.  We can specify more than one directory as a  starting point for the search. To look across the /bin and /usr directory trees  for filenames that contain the pattern \.htm, we can use the following command:<br />
  <strong>$ find /usr /bin -name &quot;*\.htm*&quot;  -print</strong><br />
          20.  To find a list of the directories use the  -type specifier. Here's one example:<br />
  <strong>find . -type d -print</strong><br />
          The most typical options for  -type are as following:</p>
        <ul>
          <li>d –Directory</li>
          <li>f – File </li>
          <li>l – Link</li>
        </ul>
        <p><strong>1.1 Using -exec option with find</strong><br />
          Find is able to execute one or  more commands  for  each file it has found with  the -exec option.  Unfortunately, one cannot simply enter the  command. We need to remember two tricks:<br />
          The  command that we  want to execute need  to   contain a special  (obscure)  argument   {},  which will   be  replaced  by the matched filename, and \; (or ';' ) at  the end of the command. (If the \ is left out, the shell will interpret the; as  the end of the find command.) If {} id is the last item in the command then it  should be a space between the {} and the \;,<br />
          for example:<br />
        </p>
        <p><strong>$ find . -type d -exec ls -ld {} \;</strong><br />
          Here are several &quot;global&quot; chmod tricks based on  fine -exec capabilities:<br />
        </p>
        <p><strong>$ find . -type f -exec chmod 500 {} ';'</strong><br />
          <strong>$ find . -name &quot;rc.conf&quot; -exec chmod o+r '{}' ';'</strong><br />
        </p>
        <p>This command will search in the  current directory and all sub directories for a file named rc.conf.<br />
          Note: The -print option will  print out the path of any file that is found with that name. In general -print  will print out the path of any file that meets the find criteria.<br />
        </p>
        <p><strong>$ find . -name core -ctime +4 -exec /bin/rm  -f {} \;</strong><br />
        </p>
        <p>There's no output from this  command because we didn't use the - print at  the  end   of the command. What it does is find all files called &quot;core&quot;  that have a creation time that's more than 4 days ago and remove them.<br />
          The  find   command  is  a   powerful  command  in   UNIX.  It  helps   us  find  files   by  owner,  type,   filename,  and  other attributes. The most awkward part of  the command is the required elements of the -exec option, and that's where the  xargs command helps immensely.<br />
        <div id="902"></div>
        <h2><strong>2. Mail</strong></h2>
          <p>The  mail command is  a   quick  and easy  way to   send  an email to someone.  Just  type  mail and   the  address of  the person   we  want  to   mail. W e  will  then   be  prompted  for   a  subject  and   any  cc's.  Then   just  type  our   message  and control-d on a line  by itself to send the mail<br />
          </p>
          <p><strong>2.1 Mail Headers</strong><br />
          Mail headers have the following  construction<br />
          </p>
          <p><strong>$mail   &lt;username&gt;</strong><br />
          <strong>Subject:   Title describing the message (optional)</strong><br />
          <strong>Cc:     List of people to receive a carbon copy (optional)</strong><br />
          <strong>Bcc:     List of people to receive blind carbon copy (they do not see user names  in the received message. Optional)</strong><br />
          </p>
          <p><strong>2.2 Mailboxes</strong><br />
          UNIX uses two mailboxes to hold  mail messages<br />
          </p>
          <p><strong>system mailbox (/vsr/spool/mail/)</strong><br />
          <strong>user mail box (..../.../mbox)</strong><br />
          </p>
          <p>Mail arrives  in   the  system  mailbox, and   is  saved  in our user   mail box after  we  have read   it.  The  user   mail box is normally located in their $HOME directory.<br />
          To list all mails which he got  say command only mail without any arguments Type<br />
          </p>
          <p><strong>$mail</strong><br />
          The mail program displays a title  message and lists all available mail headers,<br />
          </p>
          <p><strong>SCO System V Mail (version 3.2)  Type ? for help.</strong><br />
          <strong>&quot;/usr/spool/mail/brianb&quot;: 3  messages 3 new</strong><br />
          <strong>N  3  brianb  Mon May 31 15:02   10/299    My message3</strong><br />
          <strong>N  2  brianb  Mon May 31 15:01    9/278</strong><br />
          <strong>&gt;N   1 brianb  Mon May 31 15:00   12/415    My first message</strong><br />
          <strong>&amp;</strong><br />
          </p>
          <p>This initial screen displays the  subject fields of messages which have arrived. The format of the display is,<br />
            <strong>Type       Message_number           From_User         Date/Time          Subject</strong><br />
            <strong>   N          denotes  a new message</strong><br />
            <strong>   &gt;          denotes  the current message</strong><br />
            <strong>   &amp;         mail  prompt symbol</strong><br />
          </p>
          <p>Note how message number 2 does  not have a subject heading. This is because the mail message was sent from a  file, and the -s option was not specified on the command line when the mail  program was invoked. To read message type number associated to that mail. To  quit from this mail prompt say q.<br />
          </p>
          <p><strong>2.3 Sending Mail to People at Other Host Machines or Sites</strong><br />
          We send mail to other people at  remote sites by specifying their specific mail address.<br />
          <strong>Examples</strong><br />
          <strong>$ mail your_user_name@server.com</strong><br />
          </p>
          <div id="903"></div>
          <p><h2><strong>3. write</strong></h2>
          <p>The write command is used to send  on-line messages to another user on the same machine.  The format of the write command is as  follows:<br />
          </p>
          <p><strong>$ write username</strong><br />
            <strong>text of message</strong><br />
            <strong>^D</strong><br />
          </p>
          <p>After typing the command, we enter our message, starting on  the next line, terminating with the end-of-file character. The recipient will  then hear a bleep, then receive our message on screen, with a short header  attached. The following is a typical exchange. User UserRavi types:<br />
          </p>
          <p><strong>$ write UserRavi</strong><br />
          <strong>Hi there - want to go to lunch?</strong><br />
          <strong>^D</strong><br />
          <strong>$</strong><br />
          </p>
          <p>User lnp8zz will hear a beep and the following will appear  on his/her screen:<br />
          </p>
          <p><strong>Message from UserRavi on sun050 at 12:42</strong><br />
          <strong>Hi there - want to go to lunch?</strong><br />
          <strong>EOF</strong><br />
          </p>
          <p>If UserAjay wasn't logged on, the sender would see the  following:<br />
          <strong>$ write UserAjay</strong><br />
          <strong>UserAjay not logged in.</strong><br />
          </p>
          <div id="904"></div>
          <p><h2><strong>4. talk</strong></h2>
          The  command   talk  creates  a   two-way,  screen-oriented  communication   program.  It  allows   users  to  type simultaneously,  with their   output displayed in separate regions of the screen.  To   send  a talk request, type  talk and then &lt;user  name&gt;@&lt;their machine&gt;.  So, for example, to send a talk request to  dmb, who is logged on to cslab0a, type talk raju@company. The recipient of the  request is then prompted for a response.<br />
          <strong>Example:</strong><br />
          <strong>$ talk &lt;username&gt;</strong><br />
          <strong>$ talk username@&lt;their machinename&gt; [to send a message to remote  user]</strong><br />
          Note: The mesg command may, of  course, be used to disable write,talk   access to a terminal.<br />
          We can stop messages being  flashed up on our screen if we wish. To turn off direct communications type:<br />
          <strong>%  mesg  n</strong><br />
          It will remain off for the remainder of our session, unless  we type:<br />
          <strong>% mesg y</strong><br />
        To turn the facility back on. Typing just mesg lets we know  whether it is on or off.</p>
          </p>
          </p>
        <div id="905"></div>
        <p><h2><strong>5. walls</strong></h2>
        <p><strong>wall</strong> is a Unix  command line utility. That would   only  invoked   by  Administrator,  it   displays the contents of  a file  or standard input to all logged-in users.<br />
          <strong>Invocation</strong><br />
          wall is invoked as follows:<br />
          <strong>$ raju@company:# wall &lt;filename&gt;</strong><br />
          To take standard input as the file, omit the filename.<br />
          <strong>Output:</strong><br />
          When invoked, wall displays the following output:<br />
          <strong>Broadcast Message from raju@wilshiresoft</strong><br />
          <strong>(/dev/pts/0) at 01:23 ...</strong><br />
        </p>
        <div id="906"></div>
        <p><h2><strong>6. Pine  (e-mail client)</strong></h2>
          <p>Pine is a powerful freeware e-mail client: the University of  Washington's &quot; Program for Internet News &amp; Email.&quot; Many people  believe that Pine stood for &quot;Pine is not Elm.&quot; However, its original  author, Laurence Lundblade <br />
          </p>
          <p><strong>$pine &lt;Enter&gt;</strong><br />
            <strong>Exercises:</strong><br />
          1.  Send a message to another  user on our Unix system, and get them to reply.<br />
          2.  Create a small text file and  send it to another user.<br />
          3.  When we receive a message,  save it to a file other than our mailbox. (Remember we can always send<br />
          yourself a message if we don't have one.)<br />
          4.  Send a message to a user on a  different computer system.<br />
        5.  Send a note to our course  tutor telling him that we can use mail now.          </p>
      </div>   
      
  </div>
    
    
    <div class="right-pannel">
    	<div class="ad1"></div>
        <div class="ad2"></div>
    </div>
</div>

</body>
</html>
