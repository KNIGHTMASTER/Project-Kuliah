/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.zisal.swingmakeover.chap2;

import java.awt.BasicStroke;
import java.awt.Color;
import java.awt.GradientPaint;
import java.awt.Graphics;
import java.awt.Graphics2D;
import java.awt.Paint;
import java.awt.Rectangle;
import java.awt.Shape;
import java.awt.geom.Ellipse2D;
import javax.swing.JPanel;

/**
 *
 * @author fauzi
 */
public class colorShape1 extends JPanel{

    @Override
    protected void paintComponent(Graphics g) {
        super.paintComponent(g);
        Graphics2D gambar=(Graphics2D)g;
               
        gambar.setStroke(new BasicStroke(3F));               
        Shape elip=new Ellipse2D.Double(100, 100, 100, 100);                
        Paint paint=new GradientPaint(100, 100, Color.BLUE, 200, 200, Color.WHITE);                
        gambar.setColor(Color.red);
        
        gambar.setPaint(paint); 
        
        gambar.fill(elip);               
        
        gambar.setColor(Color.yellow);        
        
        gambar.draw(elip);                
        
        gambar.dispose();
    }
    
}
