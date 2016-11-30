/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.zisal.fsaapplication2;

import java.awt.BasicStroke;
import java.awt.Canvas;
import java.awt.Color;
import java.awt.Graphics;
import java.awt.Graphics2D;

/**
 *
 * @author fauzi
 */
public class canvas extends Canvas{
    private int w;
    private int h;
    private String [][] data=new String[20][20];
    private int bar,kol;
    public canvas(int w, int h, String data[][], int bar,int kol){
        setSize(w, h);
        this.data=data;
        this.bar=bar;
        this.kol=kol;
    }
    public void paint(Graphics g){
        //cast Graphics ke Graphics2D yg lebih lengkap
        Graphics2D g2d = (Graphics2D)g;                  
        for(int a=0;a<bar;a++){
            for(int b=0;b<kol;b++){
                String [] isicell=data[a][b].split(" ");
                for(int c=0;c<isicell.length;c++){
                        System.out.println("isi cell= "+isicell[c]);
                }
                g2d.setColor(Color.BLACK);     
                g2d.fillOval(5, 5, 50, 50);
                g2d.drawString(isicell[b], 5, 5);
            }
        }
        g2d.setColor(Color.black);        
        //set warna biru
        g2d.setColor(Color.blue);
        g2d.drawLine(10, 25, w-10, 25);        
        g2d.setColor(Color.green);      //set warna hijau
        g2d.fillRect(10, 40, 100, 50);  //kotak penuh pada (10,40) pxl=100x50
        g2d.setStroke(new BasicStroke(3));  //ketebalan stroke(garis) diset 3pixel
        g2d.setColor(Color.black);
        g2d.drawRoundRect(120, 40, 100, 100, 10, 10);   //gambar garis kotak tumpul
        g2d.setStroke(new BasicStroke(2));
        g2d.setColor(Color.orange);
        g2d.fillOval(230, 40, 50, 50);  //lingkaran penuh
        g2d.setColor(Color.gray);
        g2d.drawOval(230, 40, 50, 50);  //lingkaran garis
    }
}
