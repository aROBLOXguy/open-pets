<td valign="top" width="140">
<table width="130" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffcc00">
<tbody><tr>
<td width="130">
<img src="/images/images/spacer.gif" width="130" height="5"><a href="/petcentral.phtml" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('document.Image3','document.Image3','/images/images/menu/menu_petcentral_on.gif')"><img name="Image3" border="0" src="/images/images/menu/menu_petcentral.gif" width="130" height="65" alt="Loads of things to do with your pet"></a><br>
<a href="/addpet.phtml" target="_top" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('document.Image2','document.Image2','/images/images/menu/menu_create_on.gif')"><img name="Image2" border="0" src="/images/images/menu/menu_create.gif" width="130" height="45" alt="Create a Pet by clicking here!"></a><br>
<a href="/neomessages.phtml?folder=Inbox" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('document.Image5','document.Image5','/images/images/menu/menu_messages_on.gif')"><img name="Image5" border="0" src="/images/images/menu/menu_messages.gif" width="130" height="27" alt="Check your Neomail!"></a><br>
<a href="/world.phtml" target="_top" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('document.Image13','document.Image13','/images/images/menu/menu_world_on.gif')"><img name="Image13" border="0" src="/images/images/menu/menu_world.gif" width="130" height="35" alt="Find out about <?=$brandingspace?>"></a><br>
<a href="/explore.phtml" target="_top" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('document.Image14','document.Image14','/images/images/menu/menu_explore_on.gif')"><img name="Image14" border="0" src="/images/images/menu/menu_explore.gif" width="130" height="35" alt="Explore Other Worlds!"></a><br>
<a href="/neochat.phtml" target="_top" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('document.Image6','document.Image6','/images/images/menu/menu_chat_on.gif')"><img name="Image6" border="0" src="/images/images/menu/menu_chat.gif" width="130" height="34" alt="Chat with other players"></a><br>
<a href="/gameroom.phtml" target="_top" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('document.Image7','document.Image7','/images/images/menu/menu_games_on.gif')"><img name="Image7" border="0" src="/images/images/menu/menu_games.gif" width="130" height="34" alt="Play loads of great <?=$branding?> games!"></a><br>
<a href="/objects.phtml" target="_top" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('document.Image8','document.Image8','/images/images/menu/menu_shops_on.gif')"><img name="Image8" border="0" src="/images/images/menu/menu_shops.gif" width="130" height="27" alt="Shopping, auctions and more!"></a><br>
<a href="/newfeatures.phtml" target="_top" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('document.Image4','document.Image4','/images/images/menu/menu_news_on.gif')"><img name="Image4" border="0" src="/images/images/menu/menu_news.gif" width="130" height="37" alt="New Features"></a><br>
<a href="/help.phtml" target="_top" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('document.Image10','document.Image10','/images/images/menu/menu_help_on.gif')"><img name="Image10" border="0" src="/images/images/menu/menu_help.gif" width="130" height="41" alt="Help!!!!"></a><br>
<a href="/neocart/store.phtml" target="_top" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('document.Image16','document.Image16','/images/images/menu/menu_store_on.gif')"><img name="Image16" border="0" src="/images/images/menu/menu_store_off.gif" width="130" height="35" alt="Buy cool <?=$branding?> stuff!"></a><br>
<!-- Find out more about this...
<a href="/neodrive.phtml" target="_top" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('document.Image15','document.Image15','https://web.archive.org/web/20010201055000/http://images.neopets.com/images/menu/menu_neodrive_on.gif')"><img name="Image15" border="0" src="https://web.archive.org/web/20010201055000im_/http://images.neopets.com/images/menu/menu_neodrive.gif" width="130" height="35" alt="Get 50 Meg Free Space!"></a><br>
-->
<a href="/loginpage.phtml" target="_top" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('document.Image11','document.Image11','/images/images/menu/menu_login_on.gif')"><img name="Image11" border="0" src="/images/images/menu/menu_login.gif" width="130" height="26" alt="Login to <?=$branding?>"></a><br>
<a href="/logout.phtml" target="_top" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('document.Image12','document.Image12','/images/images/menu/menu_logout_on.gif')"><img name="Image12" border="0" src="/images/images/menu/menu_logout.gif" width="130" height="27" alt="Logout from <?=$branding?>"></a></td></tr></tbody></table>

<table width="130" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffcc00"><tbody><tr>
<td align="center" width="128"><br><img src="/images/images/blank.gif" width="128" height="2"><br>

<center><a href='http://www.neopets.com/treasuregrid.phtml'><img src="" height=60 width=120 border=0></a><br><br></center>
<font size=1>
<?php if (isset($_SESSION["username"])) { ?>
user : <b><?=$_SESSION["username"]?></b><br>pet : <a href='/quickref.phtml'><?=$petname?></a><br>NP : <a href='/neopoints.phtml'><?=$ohnpoints?></a>
<?php } ?>
</font>
<p><center><form action='/search.phtml' method='post'><input type='text' name='string' size=8 maxlength=100><input type='submit' value='Go!'><br><font size=-1><a href='/searchinfo.phtml'><font size=1>search <?=$branding?></font></a></font></form><p><a href='http://www.neopets.com/linktous.phtml'><font size=1>link to us</font></a><br><a href='/contact.phtml'><font size=1>email us!</font></a></p></center>
</td>    
<td width="2" bgcolor="#000000">
<img src="/images/images/blank.gif" width="2" height="1">

</td>  
</tr><tr>
<td colspan="2">      
<img src="/images/images/menu_absbottom.gif" width="130" height="19"></td>  
</tr></tbody></table>
 
</td>