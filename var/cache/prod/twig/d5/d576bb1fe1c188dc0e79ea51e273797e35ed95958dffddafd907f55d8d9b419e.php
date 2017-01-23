<?php

/* DevLeaguesBundle:About:index.html.twig */
class __TwigTemplate_70314f44ce1d85c95ef4c7cb42eab46901445c7502fdb3cc948a17854863f8c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::default.html.twig", "DevLeaguesBundle:About:index.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'box_header' => array($this, 'block_box_header'),
            'box_body' => array($this, 'block_box_body'),
            'box_footer' => array($this, 'block_box_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle::default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        echo "About";
    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        echo "How did it all happen in the first place";
    }

    // line 6
    public function block_box_header($context, array $blocks = array())
    {
        // line 7
        echo "\t<h3>
\t\tWhere it all came from.
\t</h3>
";
    }

    // line 12
    public function block_box_body($context, array $blocks = array())
    {
        // line 13
        echo "<p>
\tThis project started on december 2016 by Fabien Blin, as a personal project
\tbut with the conviction it could be the beginning of a great adventure.
</p>
<p>
\tThe idea came after some delicious pizza with schoolmates, talking about how
\tto challenge newbies on simple school exercices. Moreover, it would be
\tessencial to reward masters and pupils for their participation and get
\treputation from victories in order to show other schoolmates the best teams.
</p>
";
    }

    // line 25
    public function block_box_footer($context, array $blocks = array())
    {
        // line 26
        echo "
";
    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:About:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 26,  71 => 25,  57 => 13,  54 => 12,  47 => 7,  44 => 6,  38 => 4,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "DevLeaguesBundle:About:index.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/About/index.html.twig");
    }
}
