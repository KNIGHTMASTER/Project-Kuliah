/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.zisal.swingmakeover.chap4;

import java.awt.Color;
import java.awt.GradientPaint;
import java.awt.Graphics;
import java.awt.Graphics2D;
import java.awt.Paint;
import javax.swing.JButton;

/**
 *
 * @author fauzi
 */
public class buttonImageGlass extends JButton{
    private Paint glass;
public buttonImageGlass(){
    setContentAreaFilled(false);
    setOpaque(false);
    setFocusPainted(false);
    setBorderPainted(false);
}
    @Override
    protected void paintComponent(Graphics g) {
        super.paintComponent(g);
        Graphics2D gambar=(Graphics2D)g.create();        
        glass=new GradientPaint(0, 0, new Color(1F, 1F, 1F, 0.5F), 0,getHeight(), new Color(1F, 1F, 1F, 0.1F));        
        gambar.setPaint(glass);
        
        gambar.fillRoundRect(0, 0, getWidth(), getHeight(), 50, 50);
        
        gambar.dispose();
    }
    
}
