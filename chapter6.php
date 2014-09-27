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
        <h1 align="center">File Permissions</h1>
        <p><h2><strong>1. Understanding file permissions on Unix: a brief tutorial</strong></h2><br />
Every user on a Unix system has a unique username, and is a  member of at least one group (the primary   group for that user). This group information is held in the password  file (/etc/passwd). A user can also be  a  member  of one or more other groups.  The   auxiliary  group information  is  held in  the   file  /etc/group. Only the  administrator  can create new groups or  add/delete group members (one of the shortcomings of the system).<br />
Every directory and file on the  system has an owner, and also  an associated group. It also has a set  of  permission flags which specify separate  read, write and execute permissions for the 'user' (owner), 'group', and  'other' (everyone else with an account on the computer) The 'ls' command shows  the permissions and group associated with files when used with the &lsquo;-l&rsquo; option.  On some systems (e.g. Coos), the '-g' option is also needed to see the group  information.<br />
An example of the output produced by 'ls -l' is shown below.<br />
<strong>drwx------      2       richard        staff       2048      Jan          2              1997       private</strong><br />
<strong>drwxrws---   2       richard        staff       2048      Jan          2              1997       admin</strong><br />
<strong>-rw-rw----     2       richard        staff       12040    Aug        20            1996       admin/userinfo</strong><br />
<strong>drwxr-xr-x   3        richard        user       2048     May        13           09:27     public</strong><br />
Understanding   how  to  read   this  output  is   useful  to  all   unix  users,  but   especially  people  using   group  access permissions.        
        <ul>
          <li>Field 1:    a set of ten permission flags.</li>
          <li>Field 2:    link count (don't worry about this)</li>
          <li>Field 3:    owner of the file</li>
          <li>Field 4:    associated group for the file</li>
          <li>Field 5:    size in bytes</li>
          <li>Field 6-8: date of last modification (format  varies, but always 3 fields)</li>
          <li>Field 9:    name of file (possibly with path, depending on how ls was called)</li>
        </ul>
        <p>The permission flags are read as follows (left to right)</p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="109" valign="top"><br />
              <strong>position</strong></td>
            <td width="529" valign="top"><p> <strong>Meaning</strong></p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p><strong>1</strong></p></td>
            <td width="529" valign="top"><p>Directory flag, 'd' if a directory, '-' if a normal file, something    else occasionally may appear here for special devices.</p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p><strong>2,3,4</strong></p></td>
            <td width="529" valign="top"><p>read, write, execute permission for User (Owner) of file</p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p><strong>5,6,7</strong></p></td>
            <td width="529" valign="top"><p>read, write, execute permission for Group</p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p><strong>8,9,10</strong></p></td>
            <td width="529" valign="top"><p>read, write, execute permission for Other</p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p><strong>value</strong></p></td>
            <td width="529" valign="top"><p><strong>Meaning</strong></p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p><strong>-</strong></p></td>
            <td width="529" valign="top"><p>In any position means that flag is not set</p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p><strong>R</strong></p></td>
            <td width="529" valign="top"><p>file is readable by owner, group or other</p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p><strong>W</strong></p></td>
            <td width="529" valign="top"><p>File is writeable. On a directory, write access means we can add or    delete files</p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p><strong>X</strong></p></td>
            <td width="529" valign="top"><p>File is executable (only for programs and shell scripts - not useful    for data files). Execute permission on a directory means we can list the    files in that directory</p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p><strong>S</strong></p></td>
            <td width="529" valign="top"><p>In the place where 'x' would normally go is called the set-UID or    set-groupID flag.</p></td>
          </tr>
        </table>
        <p align="center"><img width="404" height="445" src="images/chapter6_clip_image002.jpg" /><br />
          Graphical  representation of file permission field</p>
        <p><h2><strong>2.  Difference in access permissions for files and folders</strong></h2><br />
        Access permissions   for files and folders mean   different things from the user standpoint. The table below shows  the difference.</p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="103" valign="top">              Access type  </td>
            <td width="246" valign="top"><p>File</p></td>
            <td width="289" valign="top"><p>  Directory</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p>Read (r)</p></td>
            <td width="246" valign="top"><p>the file can be read by the  corresponding userid or group to which this    set of symbols applies  </p></td>
            <td width="289" valign="top"><p>If the directory listing can be obtained</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p>Write (w)</p></td>
            <td width="246" valign="top"><p>The file can be changed or deleted by the corresponding user or group    to which this set of symbols applies</p></td>
            <td width="289" valign="top"><p>If user or process can change directory contents somehow: create new    or delete existing files in the directory or rename files. </p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p>Execute (x)</p></td>
            <td width="246" valign="top"><p>The file is considered executable, and may be executed by the user or    group to which this set of symbols applies</p></td>
            <td width="289" valign="top"><p>If user or process can access the directory, that is, go to it (make    it to be the current working directory)</p></td>
          </tr>
        </table>
        <p>On an executable program with set-UID or set-groupID, that  program runs with the effective permissions of its owner or group.<br />
          For  a   directory,  the  set-groupID   flag means  that  all files   created  inside  that   directory  will  inherit   the  group  of  the  directory. Without this flag, a file takes on the primary group of the user  creating the file. This property is important to people trying to maintain a  directory as group accessible. The subdirectories also inherit the set-groupID  property.<br />
        <h2><strong>3. The  default file permissions (umask):</strong></h2>
          <p>Each user has a default set of permissions which apply to  all files created by that user, unless the software explicitly sets something  else. This is often called the 'umask', after the command used to change it. It  is either inherited from the login process, or set in the .cshrc or .login file  which configures an individual account, or it can be run manually.<br />
          Typically the default configuration is equivalent to typing  'umask 22' which produces permissions of:<br />
        </p>
          <p><strong>-rw-r--r-- for regular files, or</strong><br />
          <strong>drwxr-xr-x for directories.</strong><br />
        </p>
          <p>In  other  words,   user  has  full   access,  everyone  else   (group and other)  has  read   access  to  files, lookup   access  to directories.<br />
          When working with group-access files and directories, it is  common to use 'umask 2' which produces permissions of:<br />
        </p>
          <p><strong>-rw-rw-r-- for regular files, or</strong><br />
          <strong>drwxrwxr-x for directories.</strong><br />
        </p>
          <p>For private work, use 'umask 77' which produces permissions:<br />
        </p>
          <p><strong>-rw------- for regular files, or</strong><br />
          <strong>drwx------ for directories.</strong><br />
        </p>
          <p>The logic behind the number given  to umask is not intuitive.<br />
          The command to change the  permission flags is &quot;chmod&quot;. Only the owner of a file can change its  permissions.<br />
          The command to change the group  of a file is &quot;chgrp&quot;. Only the owner of a file can change its group,  and can only change it to a group of which he is a member.<br />
          See the online manual pages for  details of these commands on any particular system (e.g. &quot;man  chmod&quot;).<br />
          The basic form of the chmod command is:<br />
        </p>
          <p><strong>chmod who add-or-remove what_permissions filename</strong><br />
          <strong>Note:</strong><br />
        </p>
          <p>there  should   not  be  any   spaces  between  the   &quot;who&quot;,   &quot;add-or-remove&quot;,  and  &quot;what_permissions&quot;  portions   of  the command, in a real chmod  command. The spaces were included in the above diagram to make it more  readable. See the following examples for samples of proper syntax.)<br />
          We'll break  that diagram down a little further, and then give some examples.<br />
        </p>
          <p><strong>Command  &quot;Breakdown&quot;: chmod</strong><br />
          <strong>chmod</strong><br />
          This is the name of the command.<br />
        </p>
          <p><strong>who</strong><br />
          Any combination of u (for &quot;user&quot;), g (for  &quot;group&quot;), or o (for &quot;others&quot;), or a (for  &quot;all&quot;--that is, user, group, and others).<br />
        </p>
          <p><strong>add-or-remove</strong><br />
          Use + to add the attribute (set the flag), or - to remove  the attribute (clear the flag).<br />
        </p>
          <p><strong>what_permissions</strong><br />
          Any combination of r (for Read), w (for Write), or x (for  Execute).<br />
        </p>
          <p><strong>filename</strong><br />
          A file or directory name (or wildcard pattern) to which we  wish to apply the listed permission changes.<br />
          Examples of typical useage are given below:<br />
          <strong>1</strong>.   Files in the current directory readable by anyone.<br />
          <strong>$chmod a+r *</strong><br />
          NOTE:  -rw-r--r--     - - -   myfile  (myfile is having these  permissions)<br />
        </p>
          <p><strong>2</strong>.  Give group write  permission to &quot;myfile&quot;, leaving all other permission flags alone<br />
            <strong>$ chmod g+w myfile    (symbolic  mode)</strong><br />
            <strong>$ chmod 664 myfie    (numeric  mode)</strong><br />
        </p>
          <p><strong>3</strong>.  Remove read and  write access to &quot;myfile&quot;, leaving all other permission flags alone<br />
          <strong>$ chmod g-rw myfile   (symbolic  mode)</strong><br />
          <strong>$ chmod  604   myfile       (numeric mode)</strong><br />
        </p>
          <p><strong>4.</strong>  Give group read  write access to this directory, and everything inside of it (-R = recursive)<br />
          <strong>$ chmod -R g+rw     (symbolic  mode)</strong><br />
          <strong>$ chmod –R 664    (numeric mode)</strong><br />
        </p>
        <p><strong>5.</strong>  To give read,  write to user(owner) , to give read permission and remove write permission to  Group to remove all permission for others   to the file named &lsquo;bigfile&rsquo; $ chmod u+rw, g+r, g-w, o-a bigfile  (symbolic mode)<br />
          <strong>$ chmod 6 4 0 bigfile       (numeric mode)</strong><br />
        </p>
          <p><strong>6. </strong>Change the  ownership of this directory to group 'medi' and everything inside of it (-R =  recursive). The person issuing this command must own all the files or it will  fail.<br />
          <strong>$ chgrp -R medi .     (symbolic  mode)</strong><br />
          <strong>$ There is no numeric mode equality command for this</strong><br />
        </p>
          <p><strong>Warnings:</strong><br />
          Putting  'umask  2'   into  a  startup   file  (.login  or   .cshrc)  will  make   these  settings  apply   to  everything  we   do  unless manually changed. This  can lead to giving group access to files such as saved email in your home  directory, which is generally not desirable.<br />
          Making  a  file   group  read/write without  checking what   its  group is can  lead to   accidentally giving  access  to  almost everyone on  the   system. Normally all  users are  members  of some  default group   such as &quot;users&quot;, as well as being members of specific  project-oriented groups. Don't give group access to &quot;users&quot; when we  intended some other group.<br />
        Remember that to  read a file,  we  need   execute access to the directory it is in AND read access to the  file itself. To write a file, your need  execute access to the directory AND write access to the file. To create new  files or delete files, we need write access to the directory. We also need  execute access to all parent directories back to the root. Group access will  break if a parent directory is made completely private.</p>
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
