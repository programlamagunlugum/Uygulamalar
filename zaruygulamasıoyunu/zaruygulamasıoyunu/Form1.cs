using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace zaruygulamasıoyunu
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }
        Random rastgele = new Random();
        int toplam = 0;
        int toplam1 = 0;
        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            int sayi = rastgele.Next(1, 7);
            int sayi1 = rastgele.Next(1, 7);

            {
                if (sayi > sayi1)
                { toplam++;
                    label4.Text =toplam.ToString();
                }
                else if (sayi < sayi1)
                { toplam1++;
                    label5.Text = toplam1.ToString();
                }


                if (sayi == 1)
                {
                    pictureBox1.ImageLocation = "C:\\Users\\Acer\\source\\repos\\zaruygulamasıoyunu\\zar1.png";
                }
                if (sayi == 2)
                {
                    pictureBox1.ImageLocation = "C:\\Users\\Acer\\source\\repos\\zaruygulamasıoyunu\\zar2.png";
                }
                if (sayi == 3)
                {
                    pictureBox1.ImageLocation = "C:\\Users\\Acer\\source\\repos\\zaruygulamasıoyunu\\zar3.png";
                }
                if (sayi == 4)
                {
                    pictureBox1.ImageLocation = "C:\\Users\\Acer\\source\\repos\\zaruygulamasıoyunu\\zar4.png";
                }
                if (sayi == 5)
                {
                    pictureBox1.ImageLocation = "C:\\Users\\Acer\\source\\repos\\zaruygulamasıoyunu\\zar5.png";
                }
                if (sayi == 6)
                {
                    pictureBox1.ImageLocation = "C:\\Users\\Acer\\source\\repos\\zaruygulamasıoyunu\\zar6.png";
                }


                if (sayi1 == 1)
                {
                    pictureBox2.ImageLocation = "C:\\Users\\Acer\\source\\repos\\zaruygulamasıoyunu\\zar1.png";
                }
                if (sayi1 == 2)
                {
                    pictureBox2.ImageLocation = "C:\\Users\\Acer\\source\\repos\\zaruygulamasıoyunu\\zar2.png";
                }
                if (sayi1 == 3)
                {
                    pictureBox2.ImageLocation = "C:\\Users\\Acer\\source\\repos\\zaruygulamasıoyunu\\zar3.png";
                }
                if (sayi1 == 4)
                {
                    pictureBox2.ImageLocation = "C:\\Users\\Acer\\source\\repos\\zaruygulamasıoyunu\\zar4.png";
                }
                if (sayi1 == 5)
                {
                    pictureBox2.ImageLocation = "C:\\Users\\Acer\\source\\repos\\zaruygulamasıoyunu\\zar5.png";
                }
                if (sayi1 == 6)
                {
                    pictureBox2.ImageLocation = "C:\\Users\\Acer\\source\\repos\\zaruygulamasıoyunu\\zar6.png";
                }

                if(Convert.ToInt32( label4.Text )==3|| Convert.ToInt32(label5.Text )== 3)
                {

                if (Convert.ToInt32(label4.Text) > Convert.ToInt32(label5.Text)  )
                {
                    label6.Text = "1. oyuncu oyunu kazandı!!!";
                }
                if (Convert.ToInt32(label4.Text) < Convert.ToInt32(label5.Text))
                {
                    label6.Text = "2. oyuncu oyunu kazandı!!!";
                }
                }
            }
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }
    }
}
