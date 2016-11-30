/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.zisal.fsaapplication2;

import java.awt.GridLayout;
import java.awt.event.ActionEvent;
import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JMenu;
import javax.swing.JMenuBar;
import javax.swing.JMenuItem;
import javax.swing.JOptionPane;
import javax.swing.JPanel;
import javax.swing.JScrollPane;
import javax.swing.JTable;
import javax.swing.JTextField;
import javax.swing.ListSelectionModel;

/**
 *
 * @author fauzi
 */
public class form_FSA_APP extends JFrame{    
    JPanel panelatas;    
    JPanel panelbawah;
    JLabel lblrumus1;
    JLabel lblrumus2;
    JLabel Q;
    JLabel E;
    JLabel V;
    JLabel S;
    JLabel F;
    JTextField txtQ;
    JTextField txtE;
    JTextField txtV;
    JTextField txtS;
    JTextField txtF;
    JButton btinput;
    JButton btproses;
    JMenuBar menubar;
    JMenu menufile;
    JMenuItem menudfa;
    JMenuItem menunfa;
    JMenuItem transisi;
    JMenuItem cekinput;
    JMenuItem exit;
    JMenu menurun;         
    JScrollPane putar;
    JTable tbltransisi;
     public form_FSA_APP(){
        //membuat form baru dari konstruktor parent JFrame
        initComponents();                        
    }
    public void initComponents(){
        this.setTitle("FORM APLIKASI FSA");
        this.setLocationRelativeTo(null);        
        this.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);                
        this.setLayout(new java.awt.GridLayout(4, 2));        
        this.setExtendedState(MAXIMIZED_BOTH);
        this.setVisible(true);                
        panelatas=new JPanel();        
        panelbawah=new JPanel();        
        getContentPane().add(panelatas, java.awt.BorderLayout.CENTER);        
        getContentPane().add(panelbawah, java.awt.BorderLayout.SOUTH);
        panelatas.setLayout(new java.awt.GridLayout(7, 2));                
        panelbawah.setLayout(new java.awt.GridLayout(1, 1));
        
        //all about menu
        menubar=new JMenuBar();
        menufile=new JMenu();
        exit=new JMenuItem();
        exit.setText("EXIT");
        exit.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt){
                exitActionPerformed(evt);
            }           
        });
        menudfa=new JMenuItem();
        menudfa.setText("CEK DFA");        
        menunfa=new JMenuItem();
        menunfa.setText("CEK NFA");
        menufile.setText("File");
        menufile.add(menudfa);
        menufile.add(menunfa);
        menufile.add(exit);
        menubar.add(menufile);
        menurun=new JMenu();
        menurun.setText("Run");
        menubar.add(menurun);
        transisi=new JMenuItem();
        transisi.setText("Transisi");
        cekinput=new JMenuItem();
        cekinput.setText("cek input");
        menurun.add(transisi);
        menurun.add(cekinput);
        setJMenuBar(menubar);        
        
        menudfa.addActionListener(new java.awt.event.ActionListener() {
            @Override
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                menudfaActionPerformed(evt);
            }           
        });
        
        menunfa.addActionListener(new java.awt.event.ActionListener() {

            @Override
            public void actionPerformed(java.awt.event.ActionEvent e) {
                menunfaActionPerformed(e);                
            }
        });
        //all about up panel
        lblrumus1=new JLabel();lblrumus1.setText("Tupel FSA ==> M = (Q, E, V, S, F)");
        lblrumus2=new JLabel();
        Q=new JLabel();Q.setText("Masukkan State  = ");
        E=new JLabel();E.setText("Masukkan jumlah Inputan = ");
        V=new JLabel();V.setText("Masukkan Variabel Transisi = ");
        S=new JLabel();S.setText("masukkan Start State = ");
        F=new JLabel();F.setText("masukkan Final State = ");
        txtE=new JTextField();txtE.setText("");                
        txtQ=new JTextField();txtQ.setText("");                
        txtV=new JTextField();txtV.setText("");
        txtS=new JTextField();txtS.setText("");
        txtF=new JTextField();txtF.setText("");        
        panelatas.add(lblrumus1);
        panelatas.add(lblrumus2);
        panelatas.add(Q);
        panelatas.add(txtQ);
        panelatas.add(E);
        panelatas.add(txtE);
        panelatas.add(V);
        panelatas.add(txtV);
        panelatas.add(S);
        panelatas.add(txtS);
        panelatas.add(F);
        panelatas.add(txtF);
        btproses=new JButton();btproses.setText("Proses");
        panelatas.add(btproses);
        this.pack();
        btproses.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt){
                btprosesactionPerformed(evt);
            }
        });
    }
        String dataQ, dataE, dataS, dataV, dataF;
        public String getDataQ(){
            dataQ=txtQ.getText();
            return dataQ;
        }
        public String getDataE(){
                dataE=txtE.getText();
                return dataE;
        }        
        public String getDataS(){
                dataS=txtS.getText();
                return dataS;
        }
        public String getDataV(){
                dataV=txtV.getText();
                return dataV;
        }
        public String getDataF(){
                dataF=txtF.getText();
                return dataF;
        }           
        public String [] getIsiState(){            
            String state=getDataQ();
            String data[]=state.split(" ");
            return data;
        }
        public String  getVarTransisi(){
            return txtV.getText();
        }
        public String [] getVarInputan(){
            String varIn=txtE.getText();
            String data[]=varIn.split(" ");
            return data;
        }
        public String getStart(){
            return txtS.getText();
        }
        public String getFinal(){
                return txtF.getText();
        }
        private void btprosesactionPerformed(ActionEvent evt){
        String State[]=getIsiState();
        String Start=getStart();
        String Final=getFinal();
        String Trans=getVarTransisi();
        String Input[]=getVarInputan();
        
        JFrame x=new JFrame();           
        x.setLayout(new java.awt.GridLayout(State.length, Input.length));
        x.setSize(300, 300);
        x.setLocationRelativeTo(null);
        x.setVisible(true);                
        x.setTitle("Form Transisi");
        for(int a=0;a<Input.length;a++){
            JPanel panelis=new JPanel();
            panelis.setLayout(new java.awt.GridLayout(State.length, Input.length));
            JLabel lblstate=new  JLabel(State[a]);
            JTextField txtisi=new JTextField("");
            panelis.add(lblstate);
            panelis.add(txtisi);
            x.add(panelis);
        }                                
    }                  
        private void exitActionPerformed(ActionEvent evt) {
            System.exit(0);
        }            
        public String [][] getDataTable(){
            Object [][]dataTable=new Object[20][20];
            int input=getVarInputan().length;
            int state=getIsiState().length;           
            for(int a=0;a<state;a++){
                for(int b=0;b<input;b++){
                dataTable[a][b]=tbltransisi.getValueAt(a, b);
            }
        }
            JOptionPane.showMessageDialog(null, "dari method getdatatabel "+dataTable[0][0]);
            Object[][] pendataan=dataTable;
            return (String[][]) dataTable;
        }
        private void btdrawActionPerformed() {                   
        int input=getVarInputan().length;
        int state=getIsiState().length;
        String [][]data=new String[20][20];
        data=getDataTable();
        panelbawah.add(new canvas(300,300,data,state,input));
        this.pack(); 
        }    
    private void menudfaActionPerformed(ActionEvent evt) {
        JOptionPane.showMessageDialog(null, "checking DFA");                
        String [][] daritabel=getDataTable();
        int input=getVarInputan().length;
        int state=getIsiState().length;        
        JOptionPane.showMessageDialog(null, "panjangnya input= "+input);
        JOptionPane.showMessageDialog(null, "panjangnya state= "+state);
        for(int a=0;a<state;a++){
            for(int b=0;b<input;b++){
                JOptionPane.showMessageDialog(null, "data table [a][b]= "+daritabel[a][b]);
                String [] checker=daritabel[a][b].split(" ");
                JOptionPane.showMessageDialog(null, "panjangnya checker= "+checker.length);
                for(int c=0;c<=checker.length;c++){
                    JOptionPane.showMessageDialog(null, "isi checker = "+checker[c]);
                }
            }
        }
    }        
    private void menunfaActionPerformed(ActionEvent e) {
        JOptionPane.showMessageDialog(null, "checking NFA");        
    }    
    
    //method main untuk menjalankan form, sintaks sudah bawaan java
    public static void main(String arg[]){
        //agar aman dalam menampilkan form gunakan sintaks ini
        java.awt.EventQueue.invokeLater(new Runnable(){
            public void run(){
                new form_FSA_APP();
            }
        });

    }
}
