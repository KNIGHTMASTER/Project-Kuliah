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
import java.awt.Shape;
import java.awt.event.MouseAdapter;
import java.awt.event.MouseEvent;
import java.awt.geom.RoundRectangle2D;
import javax.swing.JButton;

/**
 *
 * @author fauzi
 */
public class buttonGaul extends JButton{
    private Paint glass;
    private boolean over;    
public buttonGaul(){
    setOpaque(false);
    setContentAreaFilled(false);
    setFocusPainted(false);
    setBorderPainted(false);
    addMouseListener(new MouseAdapter() {

            @Override
            public void mouseEntered(MouseEvent e) {
                    setOver(true);
            }

            @Override
            public void mouseExited(MouseEvent e) {            
                    setOver(false);
            }
            
        
    });
}
public boolean isOver(){
    return over;
}
public void setOver(boolean over){
    this.over=over;
    repaint();
}
    @Override
    protected void paintComponent(Graphics g) {
        Graphics2D gambar=(Graphics2D)g.create();
        Paint paint=new GradientPaint(0, 0, Color.GREEN, 0, getHeight(), Color.RED);
        
        Shape rorec=new RoundRectangle2D.Double(0, 0, getWidth(), getHeight(), getHeight(), getHeight());
        if(isOver()){
            glass = new GradientPaint(0, 0, new Color(1F, 1F, 1F, 0F), 0, getHeight(), new Color(1F, 1F, 1F, 0.5F));
        }
        else{
            glass = new GradientPaint(0, 0, new Color(1F, 1F, 1F, 0.5F), 0, getHeight(), new Color(1F, 1F, 1F, 0F));
        }

        
        gambar.setPaint(paint);
        gambar.fill(rorec);        
        
        super.paintComponent(g);        
        
        gambar.setPaint(glass);
        gambar.fill(rorec);
        
        gambar.dispose();
    }
    
}
