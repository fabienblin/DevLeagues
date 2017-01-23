<?php

/* DevLeaguesBundle::default.html.twig */
class __TwigTemplate_d4678cbf36279ac806ee4da9ede66ea8faa2c715788aaa115ed24f5e31f22497 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "DevLeaguesBundle::default.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_content' => array($this, 'block_page_content'),
            'box_header' => array($this, 'block_box_header'),
            'box_body' => array($this, 'block_box_body'),
            'box_footer' => array($this, 'block_box_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    DevLeagues.com
";
    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"box\">
\t<div class=\"box-header with-border\">
\t\t";
        // line 10
        $this->displayBlock('box_header', $context, $blocks);
        // line 11
        echo "\t</div>
\t<div class=\"box-body\">
\t\t";
        // line 13
        $this->displayBlock('box_body', $context, $blocks);
        // line 14
        echo "\t</div>
\t<div class=\"box-footer\">
\t\t";
        // line 16
        $this->displayBlock('box_footer', $context, $blocks);
        // line 17
        echo "\t</div>
</div>
";
    }

    // line 10
    public function block_box_header($context, array $blocks = array())
    {
        echo "EMPTY";
    }

    // line 13
    public function block_box_body($context, array $blocks = array())
    {
        echo "EMPTY";
    }

    // line 16
    public function block_box_footer($context, array $blocks = array())
    {
        echo "EMPTY";
    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle::default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 16,  73 => 13,  67 => 10,  61 => 17,  59 => 16,  55 => 14,  53 => 13,  49 => 11,  47 => 10,  43 => 8,  40 => 7,  35 => 4,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "DevLeaguesBundle::default.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/default.html.twig");
    }
}
