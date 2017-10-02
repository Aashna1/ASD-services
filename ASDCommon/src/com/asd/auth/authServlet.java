package com.asd.auth;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class authServlet
 */
@WebServlet("/authServlet")
public class authServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;
	
	AuthService objAuthService = new AuthService();
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public authServlet() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		System.out.println("Got Request");
		String username  = "";
		String pwd = "";
		if(objAuthService.isValidUser(username, pwd))
		{
			RequestDispatcher rd = request.getRequestDispatcher("/index.jsp");
			rd.forward(request, response);
		}
		else
		{
			request.setAttribute("loginStatus", "invalid");
			RequestDispatcher rd = request.getRequestDispatcher("/login.jsp");			
			rd.forward(request, response);
		}
	}

}
