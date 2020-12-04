<?xml version="1.0" encoding="UTF-8"?>
<?xml-stylesheet type="text/css" href="../style.css"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>

 <body>
 
    <div class="container">
        <h2>Communities</h2>
        <table >
        <tr >
            <th>Name</th>
            <th>Description</th>
            <th>Creater </th>
        </tr>
        <xsl:for-each select="communities/community">
        <tr>
            <td><xsl:value-of select="name"/></td>
            <td><xsl:value-of select="desc"/></td>
            <td><xsl:value-of select="creater"/></td>
        </tr>
        </xsl:for-each>
        </table>
    </div>
 </body>
 
</html>
</xsl:template>
</xsl:stylesheet>