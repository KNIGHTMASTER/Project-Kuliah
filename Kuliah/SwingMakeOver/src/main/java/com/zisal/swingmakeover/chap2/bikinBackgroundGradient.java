/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.zisal.swingmakeover.chap2;

import java.awt.Color;
import java.awt.GradientPaint;
import java.awt.Graphics;
import java.awt.Graphics2D;
import java.awt.Paint;
import java.awt.Rectangle;
import java.awt.Shape;
import javax.swing.JPanel;

/**
 *
 * @author fauzi
 */
public class bikinBackgroundGradient extends JPanel{

    @Override
    protected void paintComponent(Graphics g) {
        super.paintComponent(g);
        Graphics2D gambar=(Graphics2D)g;
        Shape kotak=new Rectangle(0, 0, getWidth(), getHeight());
        Paint paint=new GradientPaint(0, 0, Color.black, getWidth(), getHeight(), Color.WHITE);
        gambar.setPaint(paint);
        gambar.fill(kotak);
        gambar.draw(kotak);
    }
    
}
