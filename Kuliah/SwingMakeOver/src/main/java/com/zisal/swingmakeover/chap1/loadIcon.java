/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.zisal.swingmakeover.chap1;

import java.awt.Graphics;
import java.awt.Graphics2D;
import java.awt.Image;
import javax.swing.ImageIcon;
import javax.swing.JPanel;

/**
 *
 * @author fauzi
 */
public class loadIcon extends JPanel{    
    private Image image;
    public loadIcon(){
        ImageIcon icon=new ImageIcon(getClass().getClassLoader().getResource("icon.png"));
        image=icon.getImage();
    }

    @Override
    protected void paintComponent(Graphics g) {
        super.paintComponent(g);
        Graphics2D gambar=(Graphics2D)g;
        gambar.drawImage(image, 5, 5, null);
    }
    
}
