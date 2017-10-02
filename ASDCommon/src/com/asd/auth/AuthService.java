package com.asd.auth;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

import com.asd.util.DBUtil;

public class AuthService {
	
	DBUtil objDbUtil = new DBUtil();
	
	public boolean isValidUser(String username,String password)
	{
		System.out.println("Username:" + username);
		System.out.println("Password:" + password);
		boolean response = false;
		
	
		Connection objConnection = objDbUtil.getConnection();
		
		String query = "select * from asd_users  where userid like ? and password like ?";
		
		try {
			PreparedStatement ps = objConnection.prepareStatement(query);
			ps.setString(1, username);
			ps.setString(2, password);
			
			ResultSet rs = ps.executeQuery();
			
			if(rs.next())
			{
				return true;
			}
			
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
			
		
		
		
		return response;
	}
	
	

}
