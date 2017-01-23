<?php

/* DevLeaguesBundle:Contact:index.html.twig */
class __TwigTemplate_914b0d8005dfdff00064782c5ba762d31d92557a2dd716c0847387e0b52b0039 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::default.html.twig", "DevLeaguesBundle:Contact:index.html.twig", 1);
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
        echo "Contact";
    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        echo "Feel free to say your mind";
    }

    // line 6
    public function block_box_header($context, array $blocks = array())
    {
        // line 7
        echo "\t<h3>
\t\tNothing yet.
\t</h3>
";
    }

    // line 12
    public function block_box_body($context, array $blocks = array())
    {
        // line 13
        echo "\t<p>
\t\tNothing yet.
\t</p>
";
    }

    // line 18
    public function block_box_footer($context, array $blocks = array())
    {
        // line 19
        echo "\t<p>
\t\tNothing yet.
\t</p>
";
    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Contact:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 19,  64 => 18,  57 => 13,  54 => 12,  47 => 7,  44 => 6,  38 => 4,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "DevLeaguesBundle:Contact:index.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/Contact/index.html.twig");
    }
}
