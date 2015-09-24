<%@ Language="VBScript" %>
<!-- 
    METADATA 
    TYPE="typelib" 
    UUID="CD000000-8B95-11D1-82DB-00C04FB1625D"  
    NAME="CDO for Windows 2000 Library" 
-->  
<%
    '------------------------------------------------------------------------------------------------------------------
    ' Initialize variables 
    
	    strTo = "structurehome@structuredevelopment.com"
	    strCC = ""
	    strBCC = ""
	    strSubject = "Appointment"
	    strSmtpServer = "mail.structuredevelopment.com"
	    strSendUsername = "structurehome@structuredevelopment.com"
	    strSendPassword = "Shore-or-Bicha!"	    	    
    '------------------------------------------------------------------------------------------------------------------

    '------------------------------------------------------------------------------------------------------------------
    ' FORM DATA
        
        firstname = request("firstname")
        lastname = request("lastname")  
        
        spousepartnername = ""
        if (false = isNull(request("spousepartnername"))) then
            spousepartnername = request("spousepartnername") 
        end if
        
        numchildren = ""
        if (false = isNull(request("numchildren"))) then
            numchildren = request("numchildren") 
        end if

        street = request("street")
        city = request("city")
        state = request("state")
        zip = request("zip")
        
        dayphone = ""
        if (false = isNull(request("dayphone"))) then
            dayphone = request("dayphone")
        end if
        
        eveningphone = ""
        if (false = isNull(request("eveningphone"))) then
            eveningphone = request("eveningphone")
        end if
                
        emailaddress = request("emailaddress")
        
        reachby = ""
        if (false = isNull(request("reachby"))) then
            reachby = request("reachby")
        end if  
        if (reachby = "2") then
            reachby = "Standard Mail"
        elseif (reachby = "1") then
            reachby = "Email"
        elseif (reachby = "0") then
            reachby = "Phone"
        end if
        
        moveorbuild = ""
        if (false = isNull(request("moveorbuild"))) then
            moveorbuild = request("moveorbuild")
        end if        
        if (moveorbuild = "1") then
            moveorbuild = "Yes"
        else
            moveorbuild = "No"
        end if
        
        joincom = ""
        if (false = isNull(request("join"))) then
            joincom = request("join")
        end if         
        if (joincom = "1") then
            joincom = "Yes"
        else
            joincom = "No"
        end if
        
        referredby = ""
        if (false = isNull(request("referredby"))) then
            referredby = request("referredby")
        end if
            
        referralname = ""
        if (false = isNull(request("referralname"))) then
            referralname = request("referralname")
        end if        
    '------------------------------------------------------------------------------------------------------------------
	
	'------------------------------------------------------------------------------------------------------------------
	' BUILD THE EMAIL	
	
	    body = body & "First Name: " & firstname & "<br>" 
	    body = body & "Last Name: " & lastname & "<br>"

	    if (spousepartnername <> "") then
	        body = body & "Name of Spouse or Partner: " & spousepartnername & "<br>"
	    end if
	    
	    if (numchildren <> "") then
	        body = body & "Number of children under 18 in your household: " & numchildren & "<br>"
	    end if
        
        body = body & "Current Address: <br>"
        body = body & "Street: " & street & "<br>"
        body = body & "City: " & city & "<br>"
        body = body & "State: " & state & "<br>"
        body = body & "Zip: " & zip & "<br>"

	    if (dayphone <> "") then
	        body = body & "Daytime Phone Number: " & dayphone & "<br>"
	    end if
	    
	    if (eveningphone <> "") then
	        body = body & "Evening Phone Number: " & eveningphone & "<br>"
	    end if

	    body = body & "Email: " & emailaddress & "<br>"
	    
	    body = body & "How do you prefer to be reached?: " & reachby & "<br>" 
	    
        body = body & "Do you intend to move or build within the next 12 months?: " & moveorbuild & "<br>"	    
	    
        body = body & "Would you like to join our Structure Community and be notified about our special events, promotions and news updates?: " & joincom & "<br>"
        
        if (referredby <> "") then
            body = body & "How were you referred to Structure Home?: " & referredby & "<br>"	    
        end if
        if (referralname <> "") then
            body = body & "Referral Name: " & referralname & "<br>"
        end if	    
    '------------------------------------------------------------------------------------------------------------------

    '------------------------------------------------------------------------------------------------------------------
	' SEND THE EMAIL
	
	    strFrom = emailaddress
	    strBody = body

		Set cdoConfig = CreateObject("CDO.Configuration") 

		With cdoConfig.Fields 
		    .Item(cdoSendUsingMethod) = cdoSendUsingPort 
            .Item(cdoSMTPServer) = strSmtpServer  
            .Item(cdoSMTPAuthenticate) = 1  
            .Item(cdoSendUsername) = strSendUsername  
            .Item(cdoSendPassword) = strSendPassword  
		    .update 
		End With 

		Set cdoMessage = CreateObject("CDO.Message") 

		With cdoMessage 
	       Set .Configuration = cdoConfig 
				.From = strFrom 
				.To = strTo 
				.CC = strCC
				.BCC = strBCC
				.Subject = strSubject					 
				.HTMLBody = strBody				
				.Send 
		End With 
		Set cdoMessage = Nothing 		
		Set cdoConfig = Nothing
	'------------------------------------------------------------------------------------------------------------------
%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Structure Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<style type="text/css">
<!--
.style1 {font-size: 14px}
-->
</style>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="100%" cellpadding="0" cellspacing="0" >
      <tr>
        <td height="55" bgcolor="#1b012b">
          <div align="center">
            <table width="960" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td><div align="left"><a href="index.htm"><img src="images/logo_top.jpg" width="225" height="56" border="0"></a></div></td>
                </tr>
              </table>
          </div></td>
      </tr>
      <tr>
        <td background="images/tile.jpg"><div align="center">
          <table width="960" border="0" cellpadding="0" cellspacing="0" background="images/tile_s.jpg">
            <tr>
              <td width="190" height="94" valign="top"><div align="left">
                <div align="left"><a href="index.htm"><img src="images/logo_bottom.jpg" width="190" height="94" border="0"></a></div>
                <div align="left" style="margin-top:0; vertical-align:top;">
                  <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','190','height','470','src','images/menu','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','bgcolor','#999999','movie','images/menu' ); //end AC code
                  </script>
                  <noscript>
                  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="190" height="470">
                    <param name="movie" value="images/menu.swf">
                    <param name="quality" value="high">
                    <param name="BGCOLOR" value="#999999">
                    <embed src="images/menu.swf" width="190" height="470" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" bgcolor="#999999"></embed>
                  </object>
                  </noscript>
                </div>
              </div></td>
              <td width="20">&nbsp;</td>
              <td valign="top"><div align="left">
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td><table width="730" border="0" cellpadding="0" cellspacing="0" background="images/bg_body.jpg">
                        <tr>
                          <td>&nbsp;</td>
                          <td height="20">&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td width="12">&nbsp;</td>
                          <td><div align="right"><img src="images/h_appt.gif" width="640" height="60"></div></td>
                          <td width="30">&nbsp;</td>
                          <td width="15"><p align="right">&nbsp;</p></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td height="20">&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <tr>
                                <td width="35" valign="top">&nbsp;</td>
                                <td width="224" valign="top"><div align="left"><img src="images/i_appt.jpg" width="224"></div></td>
                                <td width="30" valign="top">&nbsp;</td>
                                <td valign="middle"><div align="center">Thank you for submitting your information!</div></td>
                              </tr>
                          </table></td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td height="32" colspan="2" valign="top">&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        
                    </table></td>
                  </tr>
                  <tr>
                    <td height="40" valign="top"><div align="right"><img src="images/shadow_bottom.jpg" width="730" height="17"></div></td>
                  </tr>
                </table>
              </div>                </td>
              <td width="20" valign="top">&nbsp;</td>
            </tr>
          </table>
        </div></td>
      </tr>
      <tr>
        <td height="10" background="images/shadow.png">&nbsp;</td>
      </tr>
      <tr>
        <td valign="top"><div align="center">
          <table width="940" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="30">&nbsp;</td>
              <td nowrap><div align="left" class="legal"><span class="white">&copy; 2009 Structure Development Group. All Rights Reserved.</span><br>
              </div></td>
              <td width="10" nowrap>&nbsp;</td>
              <td nowrap class="white"> <div align="center" class="purple"><strong>20969 Ventura Blvd., Suite 228, Woodland Hills, CA  91364</strong></div></td>
              <td width="10" nowrap>&nbsp;</td>
              <td nowrap class="specialLink"><p align="center"><strong><a href="mailto:info@structurehome.com"><img src="images/email.gif" alt="" width="14" height="9" hspace="2" border="0"></a> <a href="mailto:info@structurehome.com" class="specialLink_purple">Email Us</a></strong></p>                </td>
              <td width="10" nowrap>&nbsp;</td>
              <td width="160" nowrap><div align="right"><img src="images/phone.gif" width="160" height="15"></div></td>
              <td width="30">&nbsp;</td>
            </tr>
          </table>
          <p><span class="legal"><a href="index.htm" class="specialLink">Home</a> | <a href="your_build.htm" class="specialLink">Building Your Home</a> | <a href="your_source.htm" class="specialLink">StructureSource&trade;</a> | <a href="gallery.htm" class="specialLink">Gallery</a> | <a href="about_us.htm" class="specialLink">About Us</a> | <a href="about_philosophy.htm" class="specialLink">Our Philosophy</a> | <a href="about_responsible.htm" class="specialLink">Responsible Building</a> | <a href="about_recognition.htm" class="specialLink">Recognition</a> | <a href="community.htm" class="specialLink">Structure Community</a> | <a href="blog.htm" class="specialLink">Structure Blog</a> | <a href="comm_resources.htm" class="specialLink">Resources &amp; Links</a> | <a href="testimonials.htm" class="specialLink">Testimonials</a><br>
              <a href="appt.htm" class="specialLink">&nbsp; <a href="contact.htm" class="specialLink">Contact Us</a> | <a href="appt.htm" class="specialLink">Set an Appointment</a> | <a href="brochure.htm" class="specialLink">Download our Brochure</a> | <a href="login.htm" class="specialLink">Customer Login</a><a href="http://app.procore.com/procore_login.asp" target="_blank" class="specialLink"></a> | <a href="sitemap.htm" class="specialLink">Site Map</a></span></p>
        </div></td>
      </tr>
      
      
    </table></td>
  </tr>
</table>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-8589300-1");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>

