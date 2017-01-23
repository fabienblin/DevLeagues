<?php

/* DevLeaguesBundle:League:show.html.twig */
class __TwigTemplate_c0f1ae0fb2e5a5f695b030d34542c13e73cd6bf8ab1252e9e9cf736e3353e2e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:League:show.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        echo "League";
    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        echo "Read Only";
    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"row\">
\t<div class=\"col-lg-4\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-header\">
\t\t\t\t<img src=\"\"
\t\t\t\talt=\"image de la ligue\"
\t\t\t\tclass=\"profile-user-img img-responsive img-circle\"/>
\t\t\t\t<h3 class=\"profile-username text-center\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["league"] ?? null), "name", array()), "html", null, true);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"box-body\">
\t\t\t\t<p>
\t\t\t\t\tdescription de la ligue.
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"box-footer\">
\t\t\t\t<a href=\"#\" class=\"btn btn-primary btn-block\">Edit</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col-lg-8\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-header\">
\t\t\t\t<h3>Technologies</h3>
\t\t\t</div>
\t\t\t<div class=\"box-body\">
\t\t\t\t<p>ici plein de progress</p>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"row\">
\t<div class=\"col-lg-12\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-header\">
\t\t\t\t<h3>Members</h3>
\t\t\t</div>
\t\t\t<div class=\"box-body\">
\t\t\t\t<p>
\t\t\t\t\tici la liste des membres et leur statu
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:League:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  45 => 7,  42 => 6,  36 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "DevLeaguesBundle:League:show.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/League/show.html.twig");
    }
}
