package com.asd.util;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class DBUtil {
	
	public Connection getConnection()
	{
		Connection objConnection = null;
		try {
			Class.forName("com.mysql.jdbc.Driver");
			objConnection = DriverManager.getConnection("jdbc:mysql://localhost:3306/asddb","root", "admin");			
		} catch (Exception e) {			
			e.printStackTrace();			
		}
		return objConnection;
	}
	
	
	public void closeConnection(Connection pConn)
	{
		if(pConn != null)
		{
			try {
				pConn.close();
			} catch (SQLException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
		}
	}

}
