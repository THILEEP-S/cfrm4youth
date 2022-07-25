<%-- 
    Document   : b
    Created on : Dec 20, 2021, 1:47:05 PM
    Author     : Thileep
--%>

<%@page import = "java.sql.*" %>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<%
    int a = Integer.parseInt(request.getParameter("name"));
    int b = Integer.parseInt(request.getParameter("email"));
    int c = Integer.parseInt(request.getParameter("mobile"));
    int d = Integer.parseInt(request.getParameter("gender"));
    int e = Integer.parseInt(request.getParameter("age"));
    int f = Integer.parseInt(request.getParameter("parish"));
    int g = Integer.parseInt(request.getParameter("address"));
    int h = Integer.parseInt(request.getParameter("Diocese"));
    int i = Integer.parseInt(request.getParameter("student"));
    int j = Integer.parseInt(request.getParameter("member"));  
    Connection con;
    Statement stmt;
    try {
        Class.forName("com.mysql.jdbc.Driver");
        con = DriverManager.getConnection("jdbc:mysql://localhost:3306/cfrm4youth","root","");
        stmt = con.createStatement();
        stmt.executeUpdate("insert into retreat-registration values('"+a+"','"+b+"','"+c+"','"+d+"','"+e+"','"+f+"','"+g+"','"+h+"','"+i+"','"+j+"')");
       
    }
    catch(SQLException r)
    {
        out.println(r);
    }
    
    %>
