<%@ page session="true" %>
<html>
  <body>
    <%
      String name = request.getParameter("name");
      session.setAttribute("name", name);
      session.setAttribute("startTime", new Date());
    %>
    <h1>Hello <%= session.getAttribute("name") %></h1>
    <p>Start Time: <%= session.getAttribute("startTime") %></p>
    <form action="logout.jsp" method="post">
      <input type="submit" value="Logout">
    </form>
  </body>
</html>