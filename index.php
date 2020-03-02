<!DOCTYPE html>
<html lang="en">
<?php $pageName = "Virtues"; ?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>VirtueGrow</title>
	<link rel="shortcut icon" href="Art\Icons\LogoFavicon32.png" type="image/x-icon">

  <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script type="text/javascript" src="jscript.js"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body class="gradient-pattern">

  <?php include("header.html");?>



  <div id="main">

    <div id="tabs" class="shadowbox">
      <ul id="virtueNav">
        <li class="virtueLI" onclick="openVirtue('Humility')"> <img class="virtue-icon" src="Art\Icons\humBevel.png"></img>Humility</li>
        <li class="virtueLI" onclick="openVirtue('Kindness')"> <img class="virtue-icon" src="Art\Icons\kinBevel.png"></img>Kindness</li>
        <li class="virtueLI" onclick="openVirtue('Patience')"> <img class="virtue-icon" src="Art\Icons\patBevel.png"></img>Patience</li>
        <li class="virtueLI" onclick="openVirtue('Diligence')"> <img class="virtue-icon" src="Art\Icons\dilBevel.png"></img>Diligence</li>
        <li class="virtueLI" onclick="openVirtue('Generosity')"> <img class="virtue-icon" src="Art\Icons\genBevel.png"></img>Generosity</li>
        <li class="virtueLI" onclick="openVirtue('Moderation')"> <img class="virtue-icon" src="Art\Icons\modBevel.png"></img>Moderation</li>
        <li class="virtueLI" onclick="openVirtue('Chastity')"> <img class="virtue-icon" src="Art\Icons\chaBevel.png"></img>Chastity</li>
      </ul>
    </div>


   <div id="scrollHere">

   </div>





    <div id="Humility" class="virtueContent" style="display:none">
      <div class="title">
        <h2>Humility</h2>
      </div>
      <div class="quote">
        <p class="quotation">
          True humility is not thinking less of yourself; it is thinking of yourself less.</p>
        <author>— Rick Warren</author>
      </div>
      <div class="description greenBG shadowbox">
        <p>
          Humility is the root of all Virtue, as it places prime importance upon others.  Where Sin is harming yourself or
          others, Virtue is the act of bettering yourself and others.  Humility is to focus on others, to help them
          utilize their strengths, and to lovingly shore up their weaknesses.  If everyone were humble, we
          would all achieve our full potential as human beings.
        </p>
        <p>
          Humility is the recognition that there is something important to learn from every single person,
          and likewise, YOU have something unique that you are able to offer to others for thier betterment.
        </p>
        <p>
          It is the ability to accept criticism with a desire to improve, and the courage of heart
          to undertake tasks that are difficult, tedious, or unglamorous.
        </p>
        <p>
          Finally, the Humble will honor thier promises, no matter how big or how small, and no matter who to.
        </p>
      </div>
      <div class="isisnt greyBG shadowbox">
        <strong>What it is:</strong> Honesty in dealing with yourself and others. <br><br>
        <strong>What it is NOT:</strong> Claiming that you are beneath others, or not worthy of something that you ARE worthy of. <br><br>
      </div>
      <div  id="VirtueExample" class="list">
        <strong>Examples of Humility:</strong><br>
        <p>Mary saying 'Yes' to the Lord's will for her life.</p>
        <p>Emporer Trajan who halted his cavalry en route to battle to aid a poor woman in need.</p>
        <p>David dancing wildly in front of the Ark.</p>
      </div>
      <div id="Practice" class="list">
        <strong>How to become more Humble:</strong><br>
        <p>Recite the <a href="https://www.ewtn.com/catholicism/devotions/our-father-395" target="_blank">'Our Father'</a></p>
        <p>Recite the <a href="https://www.ourcatholicprayers.com/litany-of-humility.html" target="_blank">'Litany of Humility'</a></p>
        <p>Keep your promises.</p>
        <p>Refrain from amusing anecdotes from your personal life. Instead, ask others for theirs.</p>
        <p>Pause for self-reflection each evening, ask yourself what you could have done better that day.</p>
      </div>


      <div class="oppTitle">
        <h2 style="text-align:center">Opposite of Humility <br>(Pride)</h2>
      </div>
      <div class="oppositeVice greenBG shadowbox">
        <p>
          Pride is the disorder of elevating the importance of Self over the importance of Truth.
          It no longer can recognize that other people have access to God's Truth, and, viewing them as
          having nothing to offer the Self, discards them as useless.
        </p>
        <p>
          Pride says: "That person is a waste of space.", and "My way is the only way."
        </p>
      </div>
      <div id="harms" class="list">
        <p><strong>Pride harms you</strong> by creating a barrier to learning (and re-learning) life's lessons.</p>
        <p><strong>Pride harms others</strong> by reducing them to utilitarian value, stripping them of their spiritual dignity.</p>
      </div>
      <div id="SinExample" class="list">
        <strong>Examples of Pride:</strong><br>
        <p>The Fall of Lucifer.</p>
        <p>Titan Briareus who contested Jupiter in Olympus, struck down by a lightning bolt.</p>
        <p>Jupiter, destroyed by his children Apollo, Minerva, Mars.</p>
        <p>Nimrod, builder of the tower of Babel, brought low by his hubris.</p>
        <p>Niobe, who bragged about her many sons and daughters. Because of this, they were all slaughtered.</p>
        <p>Saul, first King of Israel, who, in victory, was captured.</p>
        <p>Arachne, who boasted of her weaving to the gods. Minerva changed her into a spider.</p>
        <p>Eriphyle, wife of a soothsayer who accepted a bribe for her husband's life. Her son later slays her in vengeance for his father.</p>
        <p>Sennacherib, King of Assyria, who was defeated by the much inferior army of Judah.</p>
        <p>Cyrus, Persian Emporer, a bloodthirsty man who was beheaded, his head placed in an urn full of blood so that he could 'have his fill'.</p>
        <p>Holofernes, general to Nebuchadnezzar, was on the verge of victory when he spent the night with the beautiful enemy Judith, who cut off his head in his sleep.</p>
      </div>
    </div>





    <div id="Kindness" class="virtueContent" style="display:none">
      <div class="title">
        <h2>Kindness</h2>
      </div>
      <div class="quote">
        <p class="quotation">
          Kindness begins with the understanding that we all struggle.</p>
        <author>— Charles Glassman</author>
      </div>
      <div class="description greenBG shadowbox">
        <p>Kindness is the virtue of showing love and solidarity to others. It is the virtue of letting
          others know that they are not alone, that they are part of something greater than themselves,
          part of a friendship or of a community.</p>
        <p>Kindness is a cheerful demeanor and positive outlook, which inspires Kindness in others.
        It is charity, compassion, and friendship for its own sake.</p>
      </div>
      <div class="isisnt greyBG shadowbox">
        <strong>What it is:</strong> The ability to share in the joys and sorrows of others. <br><br>
        <strong>What it is NOT:</strong> Being a pushover.
      </div>
      <div  id="VirtueExample" class="list">
        <strong>Examples of Kindness:</strong><br>
        <p>Mary, thinking only of the happiness of the newlyweds, told Jesus: "They have no wine"</p>
        <p>The Samaritan, moved by the pain of the beaten man, ensures his care and recovery.</p>
      </div>
      <div id="Practice" class="list">
        <strong>How to become more Kind:</strong><br>
        <p>Recite the <a href="https://www.ourcatholicprayers.com/litany-of-the-saints.html" target="_blank">'Litany of the Saints'</a></p>
        <p>Offer a smile to anyone and everyone.</p>
        <p>Phone a friend just to catch up.</p>
        <p>Refrain from complaints.  Instead, share something positive that happened.</p>
      </div>


      <div class="oppTitle">
        <h2>Opposite of Kindness <br>(Envy)</h2>
      </div>
      <div class="oppositeVice greenBG shadowbox">
        <p>Envy is the sin of finding joy in another's pain, and anger at someone else's joy or good fortune. Envy is comparing yourself, your life, your house, or any other attribute to others, and when finding yourself lacking, leads to unkind
        thoughts about them, or whether they 'deserve' those things.</p>
      </div>
      <div id="harms" class="list">
        <p><strong>Envy harms you</strong> by causing rifts in your life-giving friendships.</p>
        <p><strong>Envy harms others</strong> by withholding genuine love and friendship to those who may need it.</p>
      </div>
      <div id="SinExample" class="list">
        <strong>Examples of Envy:</strong><br>
        <p>Cain, who was the first man punished for his Envy of his brother.</p>
        <p>Aglauros, princess of Athens.  She envied her sister who was favored by Apollo, and was later turned to stone.</p>
      </div>
    </div>





    <div id="Patience" class="virtueContent" style="display:none">
      <div class="title">
        <h2>Patience</h2>
      </div>
      <div class="quote">
        <p class="quotation">
          Patience is not simply the ability to wait - it's how we behave while we're waiting.</p>
        <author>— Joyce Meyer</author>
      </div>
      <div class="description greenBG shadowbox">
        <p>Patience is the great bridge builder. While Anger destroys relationships with others,
          Patience restores them. Patience is the quiet strength that is able to withstand the pains of others,
           along with your own, for noble purpose.</p>
        <p>Patience pursues harmony over antagonism, forbearing violence with the strength of self-control.
        It grants mercy and forgiveness for criminals and sinners, as well as friends and family.</p>
      </div>
      <div class="isisnt greyBG shadowbox">
        <strong>What it is:</strong> The ability to endure burdens, suffering, or aggression without complaint or seeking retaliation.<br><br>
        <strong>What it is NOT:</strong> Distracting yourself while you wait for something.
      </div>
      <div  id="VirtueExample" class="list">
        <strong>Examples of Patience:</strong><br>
        <p><strong>Towards Family:</strong> The finding of Jesus in the temple. Mary spoke to Jesus without anger, even though she was greatly upset.</p>
        <p><strong>Towards Friends:</strong> Pisistratus, a gentle and kind King, turns away the wrath of his wife with a soft answer. She was livid that a suiter for their daughter embraced her in public without their favor.
          <br>He says "What shall we do to those that wish to harm us if we take vengeance upon those who love us?" </p>
        <p><strong>Towards Enemies:</strong> The martyrdom of Saint Steven, who forgave his murderers as his life slipped away.</p>
        </div>
        <div id="Practice" class="list">
          <strong>How to become more Patient:</strong><br>
          <p>Recite the <a href="https://www.englishtexts.org/agnus-dei" target="_blank">'Agnus Dei(Lamb of God)'</a></p>
          <p>Walk away from heated arguments instead of escalate them.</p>
          <p>Fasting.  Train yourself to endure smaller pains, so that larger ones are more manageable.</p>
        </div>

      <div class="oppTitle">
        <h2>Opposite of Patience <br>(Anger)</h2>
      </div>
      <div class="oppositeVice greenBG shadowbox">
        <p>
          Anger is the sin of seeking justice in a disordered way. Anger wants to disproportionately harm others for even the slightest transgressions.
          Alternatively, Anger is willing to seek just punishment on someone who is innocent, which is also
          disordered.
        </p>
      </div>
      <div id="harms" class="list">
        <p><strong>Anger harms individuals</strong> by turning them into unjust judges and executors of punishment.</p>
        <p><strong>Anger harms others,</strong> often physically or emotionally, because it desires to punish with no concern for the victim.</p>
      </div>
      <div id="SinExample" class="list">
        <strong>Examples of Wrath:</strong><br>
        <p><strong>Towards Self:</strong> Amata, who killed herself in rage when she thought her daughter was lost.</p>
        <p><strong>Towards Family:</strong> Procne, upon discovering that her husband raped her sister, kills her own son out of revenge.</p>
        <p><strong>Towards Enemies:</strong> Haman, who convinced the King of Persia to order the death of all Jews, was crucified instead.</p>

      </div>
    </div>




    <div id="Diligence" class="virtueContent" style="display:none">
      <div class="title">
        <h2>Diligence</h2>
      </div>
      <div class="quote">
        <p class="quotation">
          What we hope ever to do with ease, we must learn first to do with diligence.</p>
        <author>— Samuel Johnson</author>
      </div>
      <div class="description greenBG shadowbox">
        <p>Diligence is a commitment to daily spiritual, personal improvement. Having Diligence means that even though you are fully aware that true perfection is unattainable, you forge ahead and do what you can anyways,
        because it is the right thing to do.
        </p>
        <p>
        Diligence unlocks the beauty and the holiness of the seemingly mundane. Whether always remembering to give thanks before a meal, or reading the bible even when tired, these seemingly small acts are large to God. Why
        should one be trusted in large matters if they can not be trusted in small matters?
      </p>
      </div>
      <div class="isisnt greyBG shadowbox">
        <strong>What it is:</strong> A willingness to act on a desire to learn and grow. <br><br>
        <strong>What it is NOT:</strong> Hard work for the sake of material gain.
      </div>
      <div  id="VirtueExample" class="list">
        <strong>Examples of Diligence:</strong><br>
        <p>Holy Zeal- Mary ran to the hill country of Juda to visit her cousin Elizabeth, upon hearing of her pregnancy.</p>
        <p>Temporal Zeal- Commitment to praying daily morning & evening prayers</p>
      </div>
      <div id="Practice" class="list">
        <strong>How to become more Diligent:</strong><br>
        <p>Recite the <a href="https://www.loyolapress.com/our-catholic-faith/scripture-and-tradition/catholic-basics/catholic-beliefs-and-practices/the-beatitudes" target="_blank">'Beatitudes'</a></p>
        <p>Make a budget for your time, just as you would for your finances.</p>
        <p>Read about the lives of the Saints.</p>
        <p>Pursue goodness in yourself and in others.  This is known as Zeal.</p>
      </div>


      <div class="oppTitle">
        <h2>Opposite of Diligence <br>(Sloth)</h2>
      </div>
      <div class="oppositeVice greenBG shadowbox">
        <p>
          Sloth is the abuse or negligence of the fruitfulness of work. Where Diligence multiplies, Sloth shrivels. Sloth seeks to avoid personal growth, often hiding in distractions and mindless entertainment. Sloth can even use the deceptive mask of long work hours, if it means that your soul is not being nourished and growing closer to God.
        </p>
      </div>
      <div id="harms" class="list">
        <p><strong>Sloth harms you</strong> by making the chasm between an individual and God seem impassable. </p>
        <p><strong>Sloth harms others</strong> by setting a bad example for a holy life.</p>
      </div>
      <div id="SinExample" class="list">
        <strong>Examples of Sloth:</strong><br>
        <p>The Israelites, after being saved by the Red Sea, still muttered, grumbled, and would not follow Moses.
          They did not live to see the promised Land.</p>
        <p>Followers of Aeneas, who choose to live in comfort in Sicily, did not share in the glory of the founding Rome.</p>
      </div>
    </div>






    <div id="Generosity" class="virtueContent" style="display:none">
      <div class="title">
        <h2>Generosity</h2>
      </div>
      <div class="quote">
        <p class="quotation">
          We often say, ‘I would give, but only to the deserving.’ The trees in your orchard say not so, nor the flocks in your pasture. They give that they may live, for to withhold is to perish.</p>
        <author>— Kahlil Gibran</author>
      </div>
      <div class="description greenBG shadowbox">
        <p>
          Generosity is both a natural confidence builder and a natural repellant of self-hatred.
          By focusing on what giving rather than receiving, we create a more outward
          orientation toward the world, which shifts our focus away from ourselves.
      </p>
      <p>
        Generosity is the great multiplier of goodwill. When someone receives a gift out of Generosity,
        it inspires something in them to give Generously to others as well. In this way,
        Generosity can grow and spread like wildfire, lighting the flames of goodwill in humanity.
      </p>
      </div>
      <div class="isisnt greyBG shadowbox">
        <strong>What it is:</strong> Love of others originating from Will, not Emotion.<br><br>
        <strong>What it is NOT:</strong> Repayment, nor giving out of perceived obligation.
      </div>
      <div  id="VirtueExample" class="list">
        <strong>Examples of Generosity:</strong><br>
        <p>Mary, who couldn't afford a proper place to give birth to her son, still gives the world the gift of Christ.</p>
        <p>St Nicholas, who gave gold to children.</p>
        <p>Fabricius, who twice refused great wealth because it would have stained his honor.</p>
      </div>
      <div id="Practice" class="list">
        <strong>How to become more Generous:</strong><br>
        <p>Recite the <a href="https://hymnary.org/text/glory_to_god_in_the_highest_and_peace" target="_blank">'Glory to God in the Highest'</a> prayer.</p>
        <p><strong>Gift of Time:</strong> Volunteer</p>
        <p><strong>Gift of Talent:</strong> Donate your skills or services to someone in need.</p>
        <p><strong>Gift of Treasure:</strong> Donate any amount of money to someone who asks for it, without regard to how they <strong>may</strong> spend it.</p>
      </div>


      <div class="oppTitle">
        <h2>Opposite of Generosity<br>(Greed)</h2>
      </div>
      <div class="oppositeVice greenBG shadowbox">
        <p>
          Greed is the selfish desire to contain and control the things of this world, especially those things that give power such as money or fame. Where Generosity seeks to spread and distribute good and goodwill, Greed seeks to take and contain
        those things. Greed is a black hole that can never be filled. </p>
      </div>
      <div id="harms" class="list">
        <p><strong>Greed harms you</strong> by creating an insatiable hunger for base things. This hunger ultimately consumes the one who tries to feed it, making them slaves to the things they try to possess.</p>
        <p><strong>Greed harms others</strong> by withholding from them the things that they need to survive: food, money, freedom.</p>
      </div>
      <div id="SinExample" class="list">
        <strong>Examples of Greed:</strong><br>
        <p>King Midas, who wished that whatever he touched would turn to gold.</p>
        <p>Sapphira & husband, who sold the apostles' property, returned only part of the sum to the community, keeping much for themselves.
          When St Peter reprimanded them, they fell dead at his feet.</p>
        <p>Polymnestor, who killed his own son because he had acquired a great sum of wealth</p>
        <p>Crassus, who took almost every bribe he was offered, had his mouth filled with molten gold after he died.</p>
      </div>
    </div>








    <div id="Moderation" class="virtueContent" style="display:none">
      <div class="title">
        <h2>Moderation</h2>
      </div>
      <div class="quote">
        <p class="quotation">
          In moderating, not in satisfying desires, lies peace.</p>
        <author>— Reginald Heber</author>
      </div>
      <div class="description greenBG shadowbox">
        <p>Most Sin is a disordered twist on a Virtue, taking it to an extreme of too little or too much.
          Moderation is the Virtue that strives towards healthy balance.</p>

      </div>
      <div class="isisnt greyBG shadowbox">
        <strong>What it is:</strong> A balance between the extremes of too little and too much. <br><br>
        <strong>What it is NOT:</strong> Total abstinence of food or drink.
      </div>
      <div  id="VirtueExample" class="list">
        <strong>Examples of Moderation:</strong><br>
        <p>Mary at the wedding, preferring the guests' happiness to her own hunger & thirst.</p>
        <p>Daniel, who refused food and drink from the King.</p>
        <p>John the Baptist, who ate only locusts and wild honey.</p>
      </div>
      <div id="Practice" class="list">
        <strong>How to become more Moderate:</strong><br>
        <p>Leave 10% of your meal on the plate as a tithe.</p>
        <p>Consume fewer sugary foods or drinks.</p>
        <p>Eat while talking with someone else.  Conversation forces you to eat slower.</p>
        <p>Drink lots of water.</p>
        <p>Remember: 1 calorie is the same as 1 burpee (pushup then jump up).  If a snack is 50 calories,
          you owe your body 50 burpees.  Good luck!</p>
      </div>


      <div class="oppTitle">
        <h2>Opposite of Moderation<br>(Gluttony)</h2>
      </div>
      <div class="oppositeVice greenBG shadowbox">
        Gluttony is primarily the abuse of food and drink. Overeating is just one way to abuse these. There are other ways to be Gluttonous as well:
        <ul class="contentUL">
          <li><strong>Laute</strong> - eating food that is too luxurious, exotic, or costly</li>
          <li><strong>Studiose</strong> - eating food that is excessive in quality (too daintily or elaborately prepared)</li>
          <li><strong>Nimis</strong> - eating food that is excessive in quantity (too much)</li>
          <li><strong>Praepropere</strong> - eating hastily (too soon or at an inappropriate time)</li>
          <li><strong>Ardenter</strong> - eating greedily (too eagerly)</li>
        </ul>
      </div>
      <div id="harms" class="list">
        <p><strong>Gluttony harms you</strong> by keeping you from self-mastery, by eroding your self control.</p>
        <p><strong>Gluttony harms others</strong> by craving more, creating excess waste, and leaving less for the needy.</p>
      </div>
      <div id="SinExample" class="list">
        <strong>Examples of Gluttony:</strong><br>
        <p>Eve, who desired power from food.</p>
        <p>A band of Centaurs from Greek myth, who were invited to a wedding feast,
          got drunk, then made off with the bride, and so got slaughtered by the groom.</p>
        <p>Gideon was instructed to leave behind his men who drank too greedily from the river,
          instead favoring those who used their hands to scoop out smaller amounts of water while still staying alert.</p>
      </div>
      <img class="wideImg" src="Art\Images\virtuecontinuum.png"></img>
    </div>




    <div id="Chastity" class="virtueContent" style="display:none">
      <div class="title">
        <h2>Chastity</h2>
      </div>
      <div class="quote">
        <p class="quotation">
          When you resolve firmly to lead a clean life, chastity will not be a burden for you: it will be a triumphal crown.</p>
        <author>— Josemaria Escriva</author>
      </div>
      <div class="description greenBG shadowbox">
        <p>Chastity is viewing human sexuality as ordered and good, as a gift given by God and thus worthy of being treated with dignity and respect. It is a great and wonderful gift that is to be used, but NOT abused. The pinnacle of human sexuality is
        the complete and total gift of one's self to another in the holy and unbreakable covenant of matrimony, which is heightened and amplified with sexual self-control that is gained through practising chastity on a daily basis prior to that
        marriage. </p>
      <p> The goal of Chastity is to overwhelm the person you have declared before God and before friends and family that you would love forever- your spouse, with the complete and total gift of yourself. Chastity teaches you to be the master of yourself, which is the only way that gift can truly and freely be given. </p>
      <p> Chastity also teaches respect for the dignity of others. Every human being is created in the image and likeness of God, and out of respect for Him, we must see each and every person as they are: a body and soul combined. Each person is a unique and beautiful individual, with their own strengths and weaknesses, and Chastity helps us to realize that they were not put here for OUR benefit, but for God's.   </p>
      </div>
      <div class="isisnt greyBG shadowbox">
        <strong>What it is:</strong> An ordered view of human sexuality, and the humanization of others. <br><br>
        <strong>What it is NOT:</strong> Asexuality, rejection of sexuality.
      </div>
      <div  id="VirtueExample" class="list">
        <strong>Examples of Chastity:</strong><br>
          <p>Mary, who knew not a man</p>
          <p>Diana, to preserve her virginity, lived in the woods as a huntress</p>
          <p>Adam, who knew his wife.  To 'know' in this sense was to recognize and appreciate her completely: mind, soul, and body.</p>
        </div>
        <div id="Practice" class="list">
          <strong>How to become more Chaste:</strong><br>
          <p>Recite the <a href="http://www.preces-latinae.org/thesaurus/Hymni/SummaeDeus.html" target="_blank">'Summae Deus Clementiae'</a> prayer.</p>
          <p>Fast.  Sexual appetite and bodily appetite are inextricably linked.  Reducing one will also reduce the other.</p>
          <p>Keep your appearance and body language clean.  This garners respect.</p>
          <p>Learn and avoid your triggers: for some it is certain food or candy, for some it is alcohol, for some it is staying up too late.</p>
        </div>


      <div class="oppTitle">
        <h2>Opposite of Chastity <br>(Lust)</h2>
      </div>
      <div class="oppositeVice greenBG shadowbox">
        <p>
          Lust is the abuse of human sexuality. Where Chastity is giving, Lust is taking. Lust seeks to gratify itself, instead of to please another.
        </p>
      </div>
      <div id="harms" class="list">
        <p><strong>Lust harms individuals</strong> by urging them to become slaves to the sexual appetites. It abuses the gift of sexuality by placing disordered emphasis on physical pleasure instead of on the complete gift of mind, soul, AND body to a single
        individual.</p>
        <p><strong>Lust harms others</strong> by disregarding their soul and personality, focusing exclusively on the body, which is then objectified.</p>
    </div>
      <div id="SinExample" class="list">
        <strong>Examples of Lust:</strong><br>
        <p>Sodom and Gomorrah, punished by fire for sexual disorder.</p>
        <p>Pasiphae, wife of Minos, who desired the bull of Poseidon, later giving birth to the Minotaur.</p>
      </div>
    </div>
  </div>


  <?php include("footer.html");?>

</body>


</html>
