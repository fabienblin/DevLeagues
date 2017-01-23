<?php

/* DevLeaguesBundle:Challenge:show_reduced.html.twig */
class __TwigTemplate_4093b78e219ca9ad2edb952c174792e00e63f2fff32591a62ef6b23bbac0fcf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:Challenge:show_reduced.html.twig", 1);
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
        // line 3
        $context["dl_macro"] = $this->loadTemplate("DevLeaguesBundle::macros.html.twig", "DevLeaguesBundle:Challenge:show_reduced.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_page_title($context, array $blocks = array())
    {
        echo "Challenges";
    }

    // line 6
    public function block_page_subtitle($context, array $blocks = array())
    {
        echo "whatever";
    }

    // line 8
    public function block_page_content($context, array $blocks = array())
    {
        // line 9
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 10
            echo "<div class=\"row\">
\t<div class=\"col-lg-12\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-body\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h4>My Challenges</h4>
\t\t\t\t\t\t<a href=\"";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_challenge");
            echo "\" class=\"btn btn-primary\">Create New Challenge</a>
\t\t\t\t\t</div>
\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["my_challenges"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["challenge"]) {
                // line 21
                echo "\t\t\t\t\t\t\t";
                echo $context["dl_macro"]->getmy_challenge_reduced($context["challenge"]);
                echo "
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['challenge'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        }
        // line 30
        echo "<div class=\"row\">
\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["challenges"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["challenge"]) {
            // line 32
            echo "\t\t";
            echo $context["dl_macro"]->getchallenge_reduced($context["challenge"]);
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['challenge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Challenge:show_reduced.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 34,  94 => 32,  90 => 31,  87 => 30,  78 => 23,  69 => 21,  65 => 20,  59 => 17,  50 => 10,  48 => 9,  45 => 8,  39 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "DevLeaguesBundle:Challenge:show_reduced.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/Challenge/show_reduced.html.twig");
    }
}
