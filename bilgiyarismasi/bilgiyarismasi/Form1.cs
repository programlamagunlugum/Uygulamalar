using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace bilgiyarismasi
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }
        int soruno = 0;
        int dogru = 0;
        int yanlis = 0;
        int sure=20;
        private void button5_Click(object sender, EventArgs e)
        {
            label4.Visible = false;
            timer1.Enabled = true;
            sure = 20;
            label10.Text = sure.ToString();
            button5.Text = "İLERİ";
            soruno++;
            label2.Text = soruno.ToString();
            button1.Enabled = true;
            button2.Enabled = true;
            button3.Enabled = true;
            button4.Enabled = true;
            if (soruno==1)
            {
                richTextBox1.Text = "   Mustafa Kemal kaç yılında doğmuştur?";
                button1.Text = "1880";
                button2.Text = "1881";
                button3.Text = "1882";
                button4.Text = "1883";
                label4.Text = "1881";
            }

            else if(soruno==2)
            {
                richTextBox1.Text = "   Türkiye kaç coğrafi bölgeye ayrılır?";
                button1.Text = "7";
                button2.Text = "21";
                button3.Text = "63";
                button4.Text = "18";
                label4.Text = "7";

            }

            else if (soruno == 3)
            {
                richTextBox1.Text = "   Türkiyenin en büyük yüz ölçümüne sahip ili hangisi?";
                button1.Text = "İstanbul";
                button2.Text = "Ankara";
                button3.Text = "Erzurum";
                button4.Text = "Konya";
                label4.Text = "Konya";

            }

        }

        private void button1_Click(object sender, EventArgs e)
        {
            label4.Visible = true;
            label3.Text = button1.Text;
            button1.Enabled = false;
            button2.Enabled = false;
            button3.Enabled = false;
            button4.Enabled = false;

            timer1.Enabled = false;

            if (label3.Text==label4.Text)
            {
                dogru++;
                label6.Text = dogru.ToString();
            }
            else
            {
                yanlis++;
                label7.Text = yanlis.ToString();
            }
        }

        private void button2_Click(object sender, EventArgs e)
        {
            label4.Visible = true;
            label3.Text = button2.Text;
            button1.Enabled = false;
            button2.Enabled = false;
            button3.Enabled = false;
            button4.Enabled = false;

            timer1.Enabled = false;
            if (label3.Text == label4.Text)
            {
                dogru++;
                label6.Text = dogru.ToString();
            }
            else
            {
                yanlis++;
                label7.Text = yanlis.ToString();
            }
        }

        private void button3_Click(object sender, EventArgs e)
        {
            label4.Visible = true;
            label3.Text = button3.Text;
            button1.Enabled = false;
            button2.Enabled = false;
            button3.Enabled = false;
            button4.Enabled = false;
            timer1.Enabled = false;
            if (label3.Text == label4.Text)
            {
                dogru++;
                label6.Text = dogru.ToString();
            }
            else
            {
                yanlis++;
                label7.Text = yanlis.ToString();
            }
        }

        private void button4_Click(object sender, EventArgs e)
        {
            label4.Visible = true;
            label3.Text = button4.Text;
            button1.Enabled = false;
            button2.Enabled = false;
            button3.Enabled = false;
            button4.Enabled = false;
            timer1.Enabled = false;
            if (label3.Text == label4.Text)
                if (label3.Text == label4.Text)
                {
                    dogru++;
                    label6.Text = dogru.ToString();
                }
                else
                {
                    yanlis++;
                    label7.Text = yanlis.ToString();
                }
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void groupBox1_Enter(object sender, EventArgs e)
        {

        }

        private void richTextBox1_TextChanged(object sender, EventArgs e)
        {

        }

        private void timer1_Tick(object sender, EventArgs e)
        {
            sure = Convert.ToInt32(label10.Text);
            sure = sure - 1;
            label10.Text = sure.ToString();
            if(sure==0)
            {
                timer1.Enabled = false;
                yanlis++;
                label7.Text = yanlis.ToString();
            }
        }
    }
}
