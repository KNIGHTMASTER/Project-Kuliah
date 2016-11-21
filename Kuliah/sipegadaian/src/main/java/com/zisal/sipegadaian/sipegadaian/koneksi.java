/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


package com.zisal.sipegadaian.sipegadaian;
import java.sql.*;
import javax.swing.JOptionPane;
/**
 *
 * @author FAUZI
 */
public class koneksi {
Connection koneksi=null;
ResultSet rs=null;
Statement st=null;
    public koneksi(){
    }
    public void konek(){
        try{
            Class.forName("com.mysql.jdbc.Driver");
            koneksi=DriverManager.getConnection("jdbc:mysql://localhost/pegadaian?;","root","");
            st=koneksi.createStatement();
            String query="SELECT * FROM barang;";
            rs=st.executeQuery(query);
        }
        catch(Exception e){
            JOptionPane.showMessageDialog(null, "error karena "+ e);
        }
    }
    public int insert(String query){
        int x = 0;
        try{
            int result=st.executeUpdate(query);
            if(result==1){
                x=1;
            }
 else{
                x=0;
 }

        }
        catch(Exception e){
            System.out.println("ERROR karena "+e);
        }
        return x;
    }
}
