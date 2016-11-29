/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.zisal.turingmachine;

import com.sun.java.swing.plaf.nimbus.NimbusLookAndFeel;
import javax.swing.UIManager;
import javax.swing.UnsupportedLookAndFeelException;

/**
 *
 * @author fauzi
 */
public class main {
    public static void main(String [] args) throws UnsupportedLookAndFeelException{
        UIManager.setLookAndFeel(new NimbusLookAndFeel());
        new FORM_APP().setVisible(true);
    }
}
