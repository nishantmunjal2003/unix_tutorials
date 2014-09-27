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
        <h1 align="center">vi Editor</h1>
        <p><h2><strong>1. General  Introduction</strong></h2>
        <p><br />
          The vi editor (short for visual  editor) is a   screen editor which is available on almost all Unix systems. Once we  have learned  vi,  we   will  find  that   it  is  a   fast  and  powerful   editor.  vi  has   no  menus  but   instead  uses  combinations   of keystrokes  in order  to   accomplish commands. If  we  are just   beginning to learn Unix, we  might  find the  Pico  editor easier to use (most command options  are displayed at the bottom of the screen). If we use the Pine email  application and  have  composed   or replied  to a  message   we  have  probably already  used Pico as it is used for text entry.  For more information please refer to the  Pine/Pico page.<br />
        </p>
        <p><strong>1.1  Starting vi</strong><br />
          To start using vi, at the Unix prompt type vi followed by a  file name. If we wish to edit an existing file, type in its name; if we are  creating a new file, type in the name we wish to give to the new file.<br />
          <strong>$ vi filename</strong><br />
          Then  hit Return. We  will see  a  screen   similar  to  one below   which  shows  blank lines with tildes  and the   name and status of the file.<br />
          <strong>~</strong><br />
          <strong>&quot;myfile&quot; [New file]</strong><br />
        </p>
        <p><strong>1.2 vi's  Modes</strong><br />
          vi has two modes: the command  mode and the insert mode. It is essential that we know which mode we are in at  any given point in time. When we are in command mode, letters of the keyboard  will be interpreted as commands. When we are in insert mode the same  letters  of the  keyboard   will type or edit text. vi always starts out in command mode. When we  wish to move between the two modes, keep these things in mind. We can type i to  enter the insert mode. If we wish to leave insert mode and return to the  command mode, hit the ESC key. If we're not sure where we are, hit ESC a couple  of times and that should put us back in command mode.<br />
        <h2><strong>2. General  Command Informati on</strong></h2>
        As mentioned previously, vi uses  letters as commands. It is important to note that in general vi commands:        
        </p>
        <ul>
          <li>are case sensitive - lowercase and uppercase  command letters do different things</li>
          <li>are not displayed on the screen when we type  them</li>
          <li>Generally do not require a Return after we type  the command.</li>
        </ul>
        <p>We will see some commands which  start with a colon (:). These commands are ex commands which are used by the ex  editor. ex is the true editor which lies underneath vi -- in other words, vi is  the interface for the ex editor.<br />
        </p>
        <p><strong>2.1  Entering Text</strong><br />
          To begin entering text in an  empty file, we must first change from the command mode to the insert mode. To  do this, type the letter  i. When we  start typing,  anything we  type will be entered into the  file. Type a   few short lines and  hit Return at  the end of each of line. Unlike word processors, vi does not use word wrap. It  will break a line at the edge of the screen. If we make a mistake, we can use  the Backspace key to remove your errors. If the Backspace key doesn't work  properly on your system, try using the Ctrl h key combination.<br />
  </p>
        <p><strong>2.2 Cursor Movement</strong><br />
          We must be in  command mode if we wish  to move the   cursor to another position in   your  file. If  we've just finished typing text, we're still  in insert mode and will need to press ESC to return to the command mode.<br />
  </p>
        <p><strong>2.2.1 Moving One Character at a Time</strong><br />
          Try using your direction keys to  move up, down, left and right in your file. Sometimes, we may find that the  direction keys don't work. If that is the case, to move the cursor one  character at the time, we may use the h, j, k, and l keys. These keys move we  in the following directions:</p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="103" valign="top"><br />
            <p align="center">h</p> </td>
            <td width="535" valign="top"><p>left one space</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">l</p></td>
            <td width="535" valign="top"><p>right one space</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">j</p></td>
            <td width="535" valign="top"><p>down one space</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">k</p></td>
            <td width="535" valign="top"><p>up one space</p></td>
          </tr>
        </table>
        <p>If we move the cursor as far as  we can in any direction, we may see a screen flash or hear a beep.<br />
          <strong>2.2.2 Moving among Words and Lines</strong><br />
          While these four keys (or your  direction keys) can move us just about anywhere we want to go in your file,  there are some shortcut keys that we can use to move a little more quickly  through a document. To move more quickly among words, we might use the  following:</p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="103" valign="top"><br />
            <p align="center">w</p> </td>
            <td width="535" valign="top"><p>Moves the cursor forward one word</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">b</p></td>
            <td width="535" valign="top"><p>Moves cursor backward one word (if in middle of a word, b will move    us to beginning of the current word).</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">e</p></td>
            <td width="535" valign="top"><p>Moves to the end of a word.</p></td>
          </tr>
        </table>
        <p>To build  on this further, we can precede these  commands   with  a number  for greater movement.  For   example,  5w would move us forward  five words; 12b would move us backwards twelve words. [We can also use numbers  with the commands mentioned earlier. For example, 5j would move us down 5  characters.]<br />
        </p>
        <p><strong>2.3 Command Keys and Case</strong><br />
          We will find  when using vi that lower case and upper case  command keys are  interpreted  differently.   For  example, when using the  lower  case  w, b, and e commands, words will be defined  by a space or a  punctuation mark. On the  other  hand,  W,  B,  and   E  commands  may   be  used  to   move  between  words   also,  but  these   commands  ignore punctuation.<br />
  </p>
        <p><strong>2.4 Shortcuts</strong><br />
          Two short cuts for moving quickly  on a line include the $ and the 0 (zero) keys. The $ key will move us to the  end of a line, while the 0 will move us quickly to the beginning of a line.<br />
  </p>
        <p><strong>2.5 Screen Movement</strong><br />
          To move the cursor to a line  within your current screen use the following keys:</p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="109" valign="top"><br />
            <p align="center">h</p></td>
            <td width="529" valign="top"><p>Moves the cursor to the top line of the screen.</p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p align="center">m</p></td>
            <td width="529" valign="top"><p>Moves the cursor to the middle line of the screen.</p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p align="center">l</p></td>
            <td width="529" valign="top"><p>Moves the cursor to the last line of the screen.</p></td>
          </tr>
        </table>
        <p>To scroll through the file and see other screens use:</p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="109" valign="top"><br />
            <p align="center">ctrl-f</p> </td>
            <td width="529" valign="top"><p>scrolls down one screen</p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p align="center">ctrl-b</p></td>
            <td width="529" valign="top"><p>scrolls up one screen</p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p align="center">ctrl-u</p></td>
            <td width="529" valign="top"><p>scrolls up a half a screen</p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p align="center">ctrl-d</p></td>
            <td width="529" valign="top"><p>scrolls down a half a screen</p></td>
          </tr>
        </table>
        <p>Two other useful commands for  moving quickly from one end to the other of a document are G to move to the end  of the file and 1G to move to the beginning of the file. If we precede G with a  number, we can move to a specific line in the document (e.g. 15G would move us  to line 15).<br />
        </p>
        <p><strong>2.6 Moving by Searching</strong><br />
          One method for moving quickly to  a particular spot in your file is to search for specific text. When we are in  command mode,  type  a   /  followed  the   text  we  wish   to  search  for. When   we  press  Return,   the  cursor  will move   to  the  first incidence of that string of text. We  can repeat the search by typing n or search in a backwards direction by using  N.</p>
        <p><strong>Basic Editing</strong><br />
          To issue  editing   commands,  we  must   be  in  command mode.   As mentioned before,   commands  will be  interpreted differently depending upon  whether they are issued in lower or upper case. Also, many of the editing  commands can be preceded by a number to indicate a repetition of the command.<br />
        <h2><strong>3. Deleting (or Cutting) Characters, Words, and Lines</strong></h2>
        <p>&nbsp;</p>
        To delete a character, first  place your cursor on that character. Then, we may use any of the following  commands:</p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="115" valign="top"><br />
              <p align="center">x</p> </td>
            <td width="523" valign="top"><p>Deletes the character under the cursor.</p></td>
          </tr>
          <tr>
            <td width="115" valign="top"><p align="center">X</p></td>
            <td width="523" valign="top"><p>Deletes the character to the left of your cursor.</p></td>
          </tr>
          <tr>
            <td width="115" valign="top"><p align="center">dw</p></td>
            <td width="523" valign="top"><p>Deletes from the character selected to the end of the word.</p></td>
          </tr>
          <tr>
            <td width="115" valign="top"><p align="center">dd</p></td>
            <td width="523" valign="top"><p>Deletes all the current line.</p></td>
          </tr>
          <tr>
            <td width="115" valign="top"><p align="center">D</p></td>
            <td width="523" valign="top"><p>Deletes from the current character to the end of the line.</p></td>
          </tr>
        </table>
        <p>Preceding the  command   with  a number  will   delete  multiple  characters.   For  example,  10x   will  delete  the   character selected  and the next 9  characters;   10X will  delete the 10  characters to the left of the currently  selected character. The command 5dw will delete 5 words, while 4dd deletes four  lines.<br />
        <h2><strong>4. Pasting Text using Put</strong></h2>
          When we  delete or cut text,  we may   need  to  reinsert it   in another location of the   document. The  Put  command   will paste in the last portion of text that was deleted since deleted  text is stored in a buffer. To use this command, place the  cursor where we need the  deleted text to  appear. Then use p to reinsert. If we are  inserting a line or paragraph use the lower case p to insert on the line below  the cursor or upper case P to place in on the line above the cursor.<br />
        <h2><strong>5. Copying  Text with Yank</strong></h2>
        If  we  wish   to make  a  duplicate   copy of existing text, we   may  use  the   yank  and put  commands to   accomplish  this function. Yank  copies the selected text into a buffer and holds it until another yank or  deletion occurs. Yank is usually used in combination with a word or line object  such as the ones shown below:</p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="103" valign="top"><br />
              yw </td>
            <td width="535" valign="top"><p>copies a word into a buffer (7yw copies 7 words)</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">yy</p></td>
            <td width="535" valign="top"><p>copies a line into a buffer (3yy will copy 3 lines)</p></td>
          </tr>
        </table>
        <p>Once the desired text is yanked, place the cursor in the  spot in which we wish to insert the text and then use the put command (p for  line below or P for line above) to insert the contents of the buffer.</p>
        <p>
        <h2><strong>6.  Replacing or Changing Characters, Words, and Lines</strong></h2><br />
          When we  are using the  following commands  to replace text, we  will be  put temporarily into insert mode  so that we can change a character, word, line, or paragraph of text.</p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="115" valign="top"><br />
              <p align="center">r</p> </td>
            <td width="523" valign="top"><p>Replaces the current character with the next character we enter/type.    Once we enter the character we are returned to command mode.</p></td>
          </tr>
          <tr>
            <td width="115" valign="top"><p align="center">R</p></td>
            <td width="523" valign="top"><p>Puts us in overtype mode until we hit ESC which will then return us    to command mode.</p></td>
          </tr>
          <tr>
            <td width="115" valign="top"><p align="center">cw</p></td>
            <td width="523" valign="top"><p>Changes and replaces the current word with text that we type.  A dollar sign marks the end of the text    we're changing.  Pressing ESC when we    finish will return us to command mode.</p></td>
          </tr>
        </table>
        <p><strong>6.1  Inserting Text</strong><br />
          If we wish to insert new text in  a line, first position the cursor to the right of where we wish the inserted  text to appear. Type i to get into insert mode and then type in the desired  text (note that the text is inserted before the cursor). Press ESC to return to  command mode.<br />
  </p>
        <p><strong>6.2 Inserting a Blank Line</strong><br />
          To insert a blank line  below the line your cursor is currently  located on, use the o key and then hit ESC to return to the command mode . Use  O to insert a line above the line the cursor is located on.<br />
  </p>
        <p><strong>6.3 Appending Text</strong><br />
          We can use  the   append command to add  text  at  any   place in  your file. Append  (a) works very much like Insert (i)  except  that it insert text after  the cursor rather than before it. Append is  probably used most often for adding text   to the  end  of   a  line.  Simply   place  your  cursor   where  we  wish   to  append  text   and  press  a.   Once  we've  finished appending, press ESC to go back to  command mode.<br />
  </p>
        <p><strong>6.4 Joining  Lines</strong><br />
          Since vi does not use automatic  word wrap, it is not unusual in editing lines to end up with lines that are too  short and that might be improved if joined together. To do this, place your  cursor on the first line to be joined and type J. As with other commands, we can  precede J with a number to join multiple lines (4J joins 4 lines). <br />
  </p>
        <p><strong>6.5 Undoing</strong><br />
          Be sure  to remember  this command. When we make a  mistake we  can undo it. DO NOT move the cursor from the line where we made the change.  Then try using one of the following two commands:</p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="109" valign="top"><br /> 
            <p align="center">u</p> </td>
            <td width="529" valign="top"><p>undoes the last change we made anywhere in the file.  Using <strong>u </strong>again will &quot;undo the undo&quot;.</p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p align="center">U</p></td>
            <td width="529" valign="top"><p>undoes all recent changes to current line.  We can not have moved from the line to    recover the original line.</p></td>
          </tr>
        </table>
        <p><h2><strong>7. Closing  a nd Saving Files</strong></h2>
          <p>When we edit a file in   vi,  we  are actually   editing  a  copy of   the  file rather  than   the  original. The following  sections describe methods we might use when closing a file, quitting vi, or  both.<br />
          </p>
          <p><strong>7.1  Quitting and Saving a File</strong><br />
          The command ZZ (notice that it is in uppercase) will allow  us to quit vi and save the edits made to a file. We will then return to a Unix  prompt. Note that we can also use the following commands:</p>
          </p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="109" valign="top"><br />
            <p align="center">:w </p></td>
            <td width="529" valign="top"><p>to save your file but not quit vi (this is good to do periodically in    case of machine crash!).</p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p align="center">:q</p></td>
            <td width="529" valign="top"><p>to quit if we haven't made any edits.</p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p align="center">:wq</p></td>
            <td width="529" valign="top"><p>to quit and save edits (basically the same as ZZ).</p></td>
          </tr>
        </table>
        <p><strong>7.2  Quitting without Saving Edits</strong><br />
        Sometimes, when we create a mess (when we first start using  vi this is easy to do!) we may wish to erase   all edits made to the file and either start over or quit. To do this, we  can choose from the following two commands:</p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="109" valign="top"><br />
              :e! </td>
            <td width="529" valign="top"><p>Reads the original file back in so that we can start over.</p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p>:q!</p></td>
            <td width="529" valign="top"><p>Wipes out all edits and allows us to exit from vi.</p></td>
          </tr>
        </table>
        <p><strong>More about Combining  Commands, Objects, and Numbers</strong><br />
          Now  that  we've   learned  some  basic   vi  commands  we   might  wish  to   expand  your  skills   by  trying  some   fancy combination steps. Some commands are generally used in combination  with a text object. We've already seen some examples  of   this.  For  example,   when  we  use   the  command  dw   to  delete  a   word,  that  combines   the  delete  (d) command   with  the  word   (w)  text  object. When   we  wish  to   delete  multiple  words,   we  might  add   a  number  to   this combination. If we wished to delete 2 words we might use 2dw or  d2w. Either of these combinations would work. So, as we can see, the general  format for a command can be<br />
  <strong>(number) (command) (text object) or (command) (number) (text object)</strong><br />
          We might wish to try out some of the following combinations  of commands and objects:</p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="109" valign="top"><br />
              <strong>Command</strong></td>
            <td width="529" valign="top"><p><strong>Description</strong></p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p align="center"><strong>d</strong></p></td>
            <td width="529" valign="top"><p>(delete)</p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p align="center"><strong>w</strong></p></td>
            <td width="529" valign="top"><p>(word to the left)</p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p align="center"><strong>y</strong></p></td>
            <td width="529" valign="top"><p>(yank/copy)</p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p align="center"><strong>b</strong></p></td>
            <td width="529" valign="top"><p>(word to the right or backward)</p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p align="center"><strong>c</strong></p></td>
            <td width="529" valign="top"><p>(change)</p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p align="center"><strong>e</strong></p></td>
            <td width="529" valign="top"><p>(end of word)</p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p align="center"><strong>H</strong></p></td>
            <td width="529" valign="top"><p>(top of the screen)</p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p align="center"><strong>L</strong></p></td>
            <td width="529" valign="top"><p>(bottom of the screen)</p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p align="center"><strong>M</strong></p></td>
            <td width="529" valign="top"><p>(middle of the screen)</p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p align="center"><strong>0</strong></p></td>
            <td width="529" valign="top"><p>(zero - first character on a line)</p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p align="center"><strong>$</strong></p></td>
            <td width="529" valign="top"><p>(end of a line)</p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p align="center"><strong>(</strong></p></td>
            <td width="529" valign="top"><p>(previous sentence)</p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p align="center"><strong>)</strong></p></td>
            <td width="529" valign="top"><p>(next sentence)</p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p align="center"><strong>[</strong></p></td>
            <td width="529" valign="top"><p>(previous section)</p></td>
          </tr>
          <tr>
            <td width="109" valign="top"><p align="center"><strong>]</strong></p></td>
            <td width="529" valign="top"><p>(next section)</p></td>
          </tr>
        </table>
        <p><h2><strong>8. Repeating a Command</strong></h2>
        <p>If we are doing repetitive  editing,  we may wish to use the same command  over and over. vi will  allow we to  use  the dot (.) to repeat the last basic  command we issued. If for example, we wished to deleted several lines, we could  use dd and then . (dot) in quick succession to delete a few lines.<br />
            <strong>A Quick Word about Customizing Your vi Environment</strong><br />
          There are several options that we  can set from within vi that can affect how we use vi. For example, one option  allows us to set a right margin that will then force vi to automatically wrap  your lines as we type. To do this, we would use a variation of the  :set command. The :set command can be used to  change various  options in vi. In the  example just described, we  could, while  still in vi, type :set wrapmargin=10 to specify that  we wish to have a right margin  of  10.  Another useful option is :set number. This command causes vi to display line  numbers in the file we are working on.<br />
          </p>
          <p><strong>8.1 Other  Options</strong><br />
          To view  a listing of  other options, we could type :set all. To view only those options  which   are currently in effect, we can  type  set:   by  itself.  Options   that  we  set   while  in  a  vi  session   will  apply  during   that  session  only.   To  make permanent changes to your  vi environment, we could edit your .exrc file. However, we should not edit this  file unless we know what we are doing!<br />
        <h2><strong>9. Useful  vi Commands</strong></h2>
          <strong>9.1  Cut/Paste Commands</strong>
            </p>
          </p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="103" valign="top"><br /><p align="center">x</p> </td>
            <td width="535" valign="top"><p>delete one character (destructive backspace)</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">dw</p></td>
            <td width="535" valign="top"><p>delete the current word (Note: ndw deletes n numbered words)</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">dd</p></td>
            <td width="535" valign="top"><p>delete the current line (Note: ndd deletes n numbered lines)</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">D</p></td>
            <td width="535" valign="top"><p>delete all content to the right of the cursor</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">d$</p></td>
            <td width="535" valign="top"><p>same as above</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">:u</p></td>
            <td width="535" valign="top"><p>undo last command</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">p,P</p></td>
            <td width="535" valign="top"><p>paste line starting one line below/above current cursor location</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">J</p></td>
            <td width="535" valign="top"><p>combine the contents of two lines</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">&quot;[a-z]nyy</p></td>
            <td width="535" valign="top"><p>yank next n lines into named buffer [a-z]</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">&quot;[a-z]p/P</p></td>
            <td width="535" valign="top"><p>place the contents of selected buffer below/above the current line</p></td>
          </tr>
        </table>
        <p><strong>9.2  Extensions to the Above Commands:</strong></p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="103" valign="top"><br />
              <p align="center">:3,18d</p> </td>
            <td width="535" valign="top"><p>delete lines 3 through 18</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">16,25m30</p></td>
            <td width="535" valign="top"><p>move lines 16 through 25 to after line 30</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">23,29co62</p></td>
            <td width="535" valign="top"><p>copy specified lines and place after line 62</p></td>
          </tr>
        </table>
        <p><strong>9.3 Cursor Relocation  commands:</strong></p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="103" valign="top"><br /><p align="center">0</p></td>
            <td width="535" valign="top"><p>goto line [n]</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">:[n]</p></td>
            <td width="535" valign="top"><p>place cursor on last line of text</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">shift g</p></td>
            <td width="535" valign="top"><p>move cursor left, right, down and up</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">h/l/j/k</p></td>
            <td width="535" valign="top"><p>move forward, backward in text, one page</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">^f/^b</p></td>
            <td width="535" valign="top"><p>move up, down one half page</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">^u/^d</p></td>
            <td width="535" valign="top"><p>move to end of line</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">$</p></td>
            <td width="535" valign="top"><p>move to beginning of line</p></td>
          </tr>
        </table>
        <p><strong>9.4  Extensions to the Above:</strong></p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="103" valign="top"><br />
              <p align="center">b</p> </td>
            <td width="535" valign="top"><p>move backwards one word (Note: nb moves back n number of words)</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">e</p></td>
            <td width="535" valign="top"><p>move to end of current word</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">(</p></td>
            <td width="535" valign="top"><p>move to beginning of curent block</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">)</p></td>
            <td width="535" valign="top"><p>move to the end of current block</p></td>
          </tr>
        </table>
        <p><strong>Searching  and Substitution commands</strong></p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="103" valign="top"><br />
              <p align="center">/ [string]</p> </td>
            <td width="535" valign="top"><p>search forward for string</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">? [string]</p></td>
            <td width="535" valign="top"><p>search backwards for string</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">n</p></td>
            <td width="535" valign="top"><p>repeat last search</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">N</p></td>
            <td width="535" valign="top"><p>repeat search in opposite direction</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">cw</p></td>
            <td width="535" valign="top"><p>change the contents of the current word, (use ESC to stop replacement    mode)</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">c$</p></td>
            <td width="535" valign="top"><p>Replace all content to the right of cursor (exit replacement mode    with ESC)</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">c0</p></td>
            <td width="535" valign="top"><p>Replace all content to the left of cursor (exit with ESC)</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">:1,$s/s1/s2/g</p></td>
            <td width="535" valign="top"><p>Yow!) global replacement of string1 with string2</p></td>
          </tr>
          <tr>
            <td width="103" valign="top"><p align="center">r</p></td>
            <td width="535" valign="top"><p>replace current character with next character typed</p></td>
          </tr>
        </table>
        <p><strong>9.5  Entering the Insert Mode:</strong></p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="121" valign="top"><br />
              <p align="center">i</p> </td>
            <td width="517" valign="top"><p>Begin inserting text at current cursor location</p></td>
          </tr>
          <tr>
            <td width="121" valign="top"><p align="center">I</p></td>
            <td width="517" valign="top"><p>Begin inserting text at the beginning of the current line</p></td>
          </tr>
          <tr>
            <td width="121" valign="top"><p align="center">a</p></td>
            <td width="517" valign="top"><p>Begin appending text, one character to the right of current cursor    location</p></td>
          </tr>
          <tr>
            <td width="121" valign="top"><p align="center">A</p></td>
            <td width="517" valign="top"><p>Begin appending text at the end of the current line</p></td>
          </tr>
          <tr>
            <td width="121" valign="top"><p align="center">o/O</p></td>
            <td width="517" valign="top"><p>Begin entering text one line below\above current line</p></td>
          </tr>
          <tr>
            <td width="121" valign="top"><p align="center">ESC</p></td>
            <td width="517" valign="top"><p>Exit insertion mode and return to command mode</p></td>
          </tr>
        </table>
        <p><strong>9.6 Exiting  and Entering VI</strong></p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="121" valign="top"><br />
              <p align="center">ZZ</p> </td>
            <td width="517" valign="top"><p>save file and exit VI</p></td>
          </tr>
          <tr>
            <td width="121" valign="top"><p align="center">:wq</p></td>
            <td width="517" valign="top"><p>same as above</p></td>
          </tr>
          <tr>
            <td width="121" valign="top"><p align="center">:e!</p></td>
            <td width="517" valign="top"><p>return to last saved version of current file</p></td>
          </tr>
          <tr>
            <td width="121" valign="top"><p align="center">:q</p></td>
            <td width="517" valign="top"><p>quit without save, (Note :q! is required if changes have been made)</p></td>
          </tr>
          <tr>
            <td width="121" valign="top"><p align="center">:w</p></td>
            <td width="517" valign="top"><p>write without exit (:w! to force write)</p></td>
          </tr>
        </table>
        <p><strong>9.7 Fancy  Stuff:</strong></p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="121" valign="top"><br />
              <p align="center">:1,10w file</p> </td>
            <td width="517" valign="top"><p>write lines 1 through 10 to file newfile</p></td>
          </tr>
          <tr>
            <td width="121" valign="top"><p align="center">:340,$w &gt;&gt; file</p></td>
            <td width="517" valign="top"><p>write lines 340 through the end of the file and append to file    newfile</p></td>
          </tr>
          <tr>
            <td width="121" valign="top"><p align="center">:sh</p></td>
            <td width="517" valign="top"><p>escape temporarily to a shell</p></td>
          </tr>
          <tr>
            <td width="121" valign="top"><p align="center">^d</p></td>
            <td width="517" valign="top"><p>return from shell to VI</p></td>
          </tr>
          <tr>
            <td width="121" valign="top"><p align="center">:![command]</p></td>
            <td width="517" valign="top"><p>execute UNIX command without leaving VI</p></td>
          </tr>
          <tr>
            <td width="121" valign="top"><p align="center">:r![command]</p></td>
            <td width="517" valign="top"><p>read output of command into VI</p></td>
          </tr>
          <tr>
            <td width="121" valign="top"><p align="center">:r[filename]</p></td>
            <td width="517" valign="top"><p>read filename into VI</p></td>
          </tr>
          <tr>
            <td width="121" valign="top"><p align="center">:$r newfile</p></td>
            <td width="517" valign="top"><p>read in newfile and attach at the end of current document</p></td>
          </tr>
          <tr>
            <td width="121" valign="top"><p align="center">:r !sort file</p></td>
            <td width="517" valign="top"><p>read in contents of file after it has been passed through the UNIX    sort</p></td>
          </tr>
          <tr>
            <td width="121" valign="top"><p align="center">:n</p></td>
            <td width="517" valign="top"><p>open next file (works with wildcard filenames,ex: vi file*)</p></td>
          </tr>
          <tr>
            <td width="121" valign="top"><p align="center">:^g</p></td>
            <td width="517" valign="top"><p>list current line number</p></td>
          </tr>
          <tr>
            <td width="121" valign="top"><p align="center">:set number</p></td>
            <td width="517" valign="top"><p>show line numbers</p></td>
          </tr>
          <tr>
            <td width="121" valign="top"><p align="center">:set showinsert</p></td>
            <td width="517" valign="top"><p>show flag (&quot;I&quot;) at bottom of screen when in insert mode</p></td>
          </tr>
          <tr>
            <td width="121" valign="top"><p align="center">:set all</p></td>
            <td width="517" valign="top"><p>display current values of VI variables</p></td>
          </tr>
          <tr>
            <td width="121" valign="top"><p align="center">:set ai</p></td>
            <td width="517" valign="top"><p>set autoindent; after this enter the insert mode and tab, from this    point on VI will indent each line to this location.  Use ESC to stop the indentations.</p></td>
          </tr>
          <tr>
            <td width="121" valign="top"><p align="center">^T</p></td>
            <td width="517" valign="top"><p>set the autoindent tab one tab stop to the right</p></td>
          </tr>
          <tr>
            <td width="121" valign="top"><p align="center">^D</p></td>
            <td width="517" valign="top"><p>set the autoindent tab one stop to the left</p></td>
          </tr>
          <tr>
            <td width="121" valign="top"><p align="center">:set tabstop=n</p></td>
            <td width="517" valign="top"><p>sets default tab space to number n</p></td>
          </tr>
          <tr>
            <td width="121" valign="top"><p align="center">&gt;&gt;&nbsp;</p></td>
            <td width="517" valign="top"><p>shift contents of line one tab stop to the right</p></td>
          </tr>
          <tr>
            <td width="121" valign="top"><p align="center">&lt;&lt;&nbsp;</p></td>
            <td width="517" valign="top"><p>shift contents of line one tab stop to the left</p></td>
          </tr>
        </table>
        <p><h2><strong>10. COMMAND  SUMMARY TEST</strong></h2>
          Answer the following questions before continuing with the  remainder of the exercises.<br />
          10.  What is the  command to move up one line?<br />
          11.  What is the  command to move down one line?<br />
          12.  What is the  command to delete a line?<br />
          13.  What is the  command to abandon the editor, and return to the shell?<br />
          14.  What is the  command to undo the last command?<br />
          15.  What is the  command to position the cursor at the end of the current line?<br />
          16.  What is the  command to write the buffer to the file and remain in vi?<br />
          17.  What is the  command to erase the character at the cursor position?<br />
        18.  What is the  command to position the cursor at the beginning of the previous word?</p>
<h2>&nbsp;</h2></div>   
      
  </div>
    
    
    <div class="right-pannel">
    	<div class="ad1"></div>
        <div class="ad2"></div>
    </div>
</div>

</body>
</html>
