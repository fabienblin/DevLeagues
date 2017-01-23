<?php

/* DevLeaguesBundle:News:show_reduced.html.twig */
class __TwigTemplate_1be5f0429be33d1336c6a9af8abdb459875f4798a49ed00e4a99bd588fc6611d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::default.html.twig", "DevLeaguesBundle:News:show_reduced.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle::default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["dl_macro"] = $this->loadTemplate("DevLeaguesBundle::macros.html.twig", "DevLeaguesBundle:News:show_reduced.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_page_title($context, array $blocks = array())
    {
        echo "News";
    }

    // line 6
    public function block_page_subtitle($context, array $blocks = array())
    {
        echo "Hot stuf";
    }

    // line 8
    public function block_page_content($context, array $blocks = array())
    {
        // line 9
        echo "<ul class=\"timeline\">
\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["newss"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 11
            echo "\t\t";
            echo $context["dl_macro"]->getnews_reduced($context["news"]);
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t<li>
\t\t<i class=\"fa fa-clock-o bg-gray\"></i>
\t</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:News:show_reduced.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 13,  55 => 11,  51 => 10,  48 => 9,  45 => 8,  39 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "DevLeaguesBundle:News:show_reduced.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/News/show_reduced.html.twig");
    }
}
