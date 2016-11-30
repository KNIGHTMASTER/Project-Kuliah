/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.zisal.swingmakeover.chap3;

import java.awt.Graphics;
import java.awt.Graphics2D;
import java.awt.Image;
import java.awt.Rectangle;
import java.awt.Shape;
import javax.swing.ImageIcon;
import javax.swing.JPanel;

/**
 *
 * @author fauzi
 */
public class pictTrans extends JPanel{
    private Image gambar;
    public pictTrans(){
        gambar=new ImageIcon(getClass().getClassLoader().getResource("background.jpg")).getImage();
    }

    
    @Override
    protected void paintComponent(Graphics g) {
        super.paintComponent(g);
        Graphics2D g2=(Graphics2D)g.create();
        g2.drawImage(gambar, 0,0,getWidth(), getHeight(), null);
        g2.dispose();
    }
    
}
