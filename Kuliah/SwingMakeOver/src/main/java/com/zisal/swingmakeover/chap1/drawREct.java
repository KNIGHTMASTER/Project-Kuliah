/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.zisal.swingmakeover.chap1;

import java.awt.Graphics;
import java.awt.Graphics2D;
import java.awt.Rectangle;
import java.awt.Shape;
import javax.swing.JPanel;

/**
 *
 * @author fauzi
 */
public class drawREct extends JPanel{

    @Override
    protected void paintComponent(Graphics g) {
        super.paintComponent(g);
        Graphics2D g2=(Graphics2D)g;
        Shape rec=new Rectangle(10, 10, 100, 100);
        g2.draw(rec);
        g2.dispose();
    }
    
}
