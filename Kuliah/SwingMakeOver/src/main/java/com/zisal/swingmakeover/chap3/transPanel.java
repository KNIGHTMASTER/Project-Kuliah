/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.zisal.swingmakeover.chap3;

import java.awt.Color;
import java.awt.Graphics;
import java.awt.Graphics2D;
import java.awt.Rectangle;
import java.awt.Shape;
import javax.swing.JPanel;

/**
 *
 * @author fauzi
 */
public class transPanel extends JPanel{
    private Color warna;
    public transPanel(){
        setOpaque(false);
        warna=new Color(getBackground().getRed(), getBackground().getGreen(), getBackground().getBlue(), 90);
    }

    @Override
    public void setBackground(Color bg) {
        super.setBackground(bg);
        warna=new Color(getBackground().getRed(), getBackground().getGreen(), getBackground().getBlue(), 90);
        repaint();
    }

    
    @Override
    protected void paintComponent(Graphics g) {
        super.paintComponent(g);
        Graphics2D g2=(Graphics2D)g.create();
        g2.setColor(warna);
        g2.fillRect(0, 0, getWidth(), getHeight());                
        g2.dispose();
    }
    
}
