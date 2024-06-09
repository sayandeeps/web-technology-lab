<%@ page session="true" %>
<html>
  <body>
    <%
      String name = (String) session.getAttribute("name");
      Date startTime = (Date) session.getAttribute("startTime");
      Date endTime = new Date();
      long duration = endTime.getTime() - startTime.getTime();
      session.invalidate();
    %>
    <h1>Thank You <%= name %></h1>
    <p>You used the application for <%= duration %> milliseconds.</p>
  </body>
</html>