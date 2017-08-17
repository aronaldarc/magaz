<HTML> 

<HEAD> 

<TITLE>Отправка сообщения с вложением</TITLE> 

</HEAD> 

<BODY> 

<H3> <center><font color=#1E90FF>Отправка сообщения с вложением</font></H3> 

<center> 

<table width=1 border=0> 

<form action=simple_mail.php enctype='multipart/form-data' method=post> 



<tr>
    <td width=50%>To:
    </td>
    <td align=right><input type=text name=mail_to maxlength=32>
    </td>
</tr> 

<tr>
    <td width=50%>Subject:
    </td>
    <td align=right><input type=text name=mail_subject maxlength=64>
    </td>
</tr> 

<tr>
    <td colspan=2>Сообщение:<br><textarea cols=50 rows=8 name=mail_msg></textarea>
    </td> 
    
    <tr>
        <td width=50%>Photo:
        </td>
        <td align=right><input type=file name=mail_file maxlength=64>
        </td>
    </tr> 

</tr>
<tr>
    <td colspan=2><input type=submit value='Отправить'></td>
</tr> 

</form> 

</table> 

</center> 
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5868.7979543985775!2d30.636835291651064!3d50.46289806058145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe7e45c9a67481f20!2z0KLQpiDQlNCw0YDRi9C90L7Qug!5e0!3m2!1sru!2sua!4v1502961686605" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

</BODY> 

</HTML>