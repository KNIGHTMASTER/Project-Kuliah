/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.zisal.swingmakeover.chap1;

import java.awt.Graphics;
import java.awt.Graphics2D;
import java.awt.Shape;
import java.awt.geom.Ellipse2D;
import javax.swing.JPanel;

/**
 *
 * @author fauzi
 */
public class drawEllipse extends JPanel{

    @Override
    protected void paintComponent(Graphics g) {
        super.paintComponent(g);
        Graphics2D g2=(Graphics2D)g;
        Shape ellip=new Ellipse2D.Double(10, 10, 100, 100);
        g2.draw(ellip);
    }
    
}
