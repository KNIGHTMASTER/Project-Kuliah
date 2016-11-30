/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.zisal.swingmakeover.chap1;



import java.awt.Graphics;
import java.awt.Graphics2D;
import java.awt.Rectangle;
import java.awt.Shape;
import java.awt.geom.Ellipse2D;
import javax.swing.JPanel;

/**
 *
 * @author fauzi
 */
public class drawEllipse_REct extends JPanel{

    @Override
    protected void paintComponent(Graphics g) {
        super.paintComponent(g);
        Graphics2D g2=(Graphics2D)(Graphics)g;
        Shape shape=new Rectangle(10, 10, 100, 100);
        Shape elip=new Ellipse2D.Double(20, 10, 100, 100);
        g2.draw(elip);
        g2.draw(shape);
    }    
}
