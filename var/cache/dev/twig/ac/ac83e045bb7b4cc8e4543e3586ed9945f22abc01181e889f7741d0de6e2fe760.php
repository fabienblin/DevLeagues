<?php

/* DevLeaguesBundle::default.html.twig */
class __TwigTemplate_ca68c69d47ed135fa8fda8bd852ec95da1b8b26e83b96963e6ee8cd6b6c6ff6c extends Twig_Template
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
        $__internal_583adb379db7318725bcc37475c695cdfdab6663d0e4f9a57976d3350f24a9c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_583adb379db7318725bcc37475c695cdfdab6663d0e4f9a57976d3350f24a9c1->enter($__internal_583adb379db7318725bcc37475c695cdfdab6663d0e4f9a57976d3350f24a9c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle::default.html.twig"));

        $__internal_b2827b8697cdf05d68cf7c1b695fd986c94e33b86defab8847b2b6406d8c7bcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2827b8697cdf05d68cf7c1b695fd986c94e33b86defab8847b2b6406d8c7bcf->enter($__internal_b2827b8697cdf05d68cf7c1b695fd986c94e33b86defab8847b2b6406d8c7bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle::default.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_583adb379db7318725bcc37475c695cdfdab6663d0e4f9a57976d3350f24a9c1->leave($__internal_583adb379db7318725bcc37475c695cdfdab6663d0e4f9a57976d3350f24a9c1_prof);

        
        $__internal_b2827b8697cdf05d68cf7c1b695fd986c94e33b86defab8847b2b6406d8c7bcf->leave($__internal_b2827b8697cdf05d68cf7c1b695fd986c94e33b86defab8847b2b6406d8c7bcf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c50d40af66a1679590f51327ea60447df0910fe9174d524b5dfb18eba8881f85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c50d40af66a1679590f51327ea60447df0910fe9174d524b5dfb18eba8881f85->enter($__internal_c50d40af66a1679590f51327ea60447df0910fe9174d524b5dfb18eba8881f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_913be139218587e25c0abc025340cbd449a81c72d1385eb3f7ab6d7c3dec9450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_913be139218587e25c0abc025340cbd449a81c72d1385eb3f7ab6d7c3dec9450->enter($__internal_913be139218587e25c0abc025340cbd449a81c72d1385eb3f7ab6d7c3dec9450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    DevLeagues.com
";
        
        $__internal_913be139218587e25c0abc025340cbd449a81c72d1385eb3f7ab6d7c3dec9450->leave($__internal_913be139218587e25c0abc025340cbd449a81c72d1385eb3f7ab6d7c3dec9450_prof);

        
        $__internal_c50d40af66a1679590f51327ea60447df0910fe9174d524b5dfb18eba8881f85->leave($__internal_c50d40af66a1679590f51327ea60447df0910fe9174d524b5dfb18eba8881f85_prof);

    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_461ed1ec31314e3b9d312e3f18aee652daf4a2750a15df3a743d893d27c7f764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_461ed1ec31314e3b9d312e3f18aee652daf4a2750a15df3a743d893d27c7f764->enter($__internal_461ed1ec31314e3b9d312e3f18aee652daf4a2750a15df3a743d893d27c7f764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_85601fa8426f8f79bf2d403e4ef7369afaa6e09e95b64c4ae20eaec87c377c56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85601fa8426f8f79bf2d403e4ef7369afaa6e09e95b64c4ae20eaec87c377c56->enter($__internal_85601fa8426f8f79bf2d403e4ef7369afaa6e09e95b64c4ae20eaec87c377c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_85601fa8426f8f79bf2d403e4ef7369afaa6e09e95b64c4ae20eaec87c377c56->leave($__internal_85601fa8426f8f79bf2d403e4ef7369afaa6e09e95b64c4ae20eaec87c377c56_prof);

        
        $__internal_461ed1ec31314e3b9d312e3f18aee652daf4a2750a15df3a743d893d27c7f764->leave($__internal_461ed1ec31314e3b9d312e3f18aee652daf4a2750a15df3a743d893d27c7f764_prof);

    }

    // line 10
    public function block_box_header($context, array $blocks = array())
    {
        $__internal_72db97fbb1edcbc8e96eda34a58e0a3e786c3c4a4fe5c8c83fc674ba500a00de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72db97fbb1edcbc8e96eda34a58e0a3e786c3c4a4fe5c8c83fc674ba500a00de->enter($__internal_72db97fbb1edcbc8e96eda34a58e0a3e786c3c4a4fe5c8c83fc674ba500a00de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_header"));

        $__internal_6cfb0852c0e9f5752d3ee3fbe3e528f5b8e112d0aec335b81eac734db76f77b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cfb0852c0e9f5752d3ee3fbe3e528f5b8e112d0aec335b81eac734db76f77b7->enter($__internal_6cfb0852c0e9f5752d3ee3fbe3e528f5b8e112d0aec335b81eac734db76f77b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_header"));

        echo "EMPTY";
        
        $__internal_6cfb0852c0e9f5752d3ee3fbe3e528f5b8e112d0aec335b81eac734db76f77b7->leave($__internal_6cfb0852c0e9f5752d3ee3fbe3e528f5b8e112d0aec335b81eac734db76f77b7_prof);

        
        $__internal_72db97fbb1edcbc8e96eda34a58e0a3e786c3c4a4fe5c8c83fc674ba500a00de->leave($__internal_72db97fbb1edcbc8e96eda34a58e0a3e786c3c4a4fe5c8c83fc674ba500a00de_prof);

    }

    // line 13
    public function block_box_body($context, array $blocks = array())
    {
        $__internal_a538988e4d7a83bc7dc40a97f5963b9dc905380490af402d4686c276c2728a9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a538988e4d7a83bc7dc40a97f5963b9dc905380490af402d4686c276c2728a9c->enter($__internal_a538988e4d7a83bc7dc40a97f5963b9dc905380490af402d4686c276c2728a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_body"));

        $__internal_835ffb8042df14af79e1977ab6d084c2b2c151ca999a5784b0b96fb678e67dca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_835ffb8042df14af79e1977ab6d084c2b2c151ca999a5784b0b96fb678e67dca->enter($__internal_835ffb8042df14af79e1977ab6d084c2b2c151ca999a5784b0b96fb678e67dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_body"));

        echo "EMPTY";
        
        $__internal_835ffb8042df14af79e1977ab6d084c2b2c151ca999a5784b0b96fb678e67dca->leave($__internal_835ffb8042df14af79e1977ab6d084c2b2c151ca999a5784b0b96fb678e67dca_prof);

        
        $__internal_a538988e4d7a83bc7dc40a97f5963b9dc905380490af402d4686c276c2728a9c->leave($__internal_a538988e4d7a83bc7dc40a97f5963b9dc905380490af402d4686c276c2728a9c_prof);

    }

    // line 16
    public function block_box_footer($context, array $blocks = array())
    {
        $__internal_eef6435f36766c0b89b8e1844852c00e029f2e8f9cc2c0e1377e21d91f260ac4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eef6435f36766c0b89b8e1844852c00e029f2e8f9cc2c0e1377e21d91f260ac4->enter($__internal_eef6435f36766c0b89b8e1844852c00e029f2e8f9cc2c0e1377e21d91f260ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_footer"));

        $__internal_e2b6634f42df700e1c4636c03382479a51a1761d294aba1e7238cfdf4eb0f8cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2b6634f42df700e1c4636c03382479a51a1761d294aba1e7238cfdf4eb0f8cd->enter($__internal_e2b6634f42df700e1c4636c03382479a51a1761d294aba1e7238cfdf4eb0f8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_footer"));

        echo "EMPTY";
        
        $__internal_e2b6634f42df700e1c4636c03382479a51a1761d294aba1e7238cfdf4eb0f8cd->leave($__internal_e2b6634f42df700e1c4636c03382479a51a1761d294aba1e7238cfdf4eb0f8cd_prof);

        
        $__internal_eef6435f36766c0b89b8e1844852c00e029f2e8f9cc2c0e1377e21d91f260ac4->leave($__internal_eef6435f36766c0b89b8e1844852c00e029f2e8f9cc2c0e1377e21d91f260ac4_prof);

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
        return array (  139 => 16,  121 => 13,  103 => 10,  91 => 17,  89 => 16,  85 => 14,  83 => 13,  79 => 11,  77 => 10,  73 => 8,  64 => 7,  53 => 4,  44 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}

{% block title %}
    DevLeagues.com
{% endblock %}

{% block page_content %}
<div class=\"box\">
\t<div class=\"box-header with-border\">
\t\t{% block box_header %}EMPTY{% endblock %}
\t</div>
\t<div class=\"box-body\">
\t\t{% block box_body %}EMPTY{% endblock %}
\t</div>
\t<div class=\"box-footer\">
\t\t{% block box_footer %}EMPTY{% endblock %}
\t</div>
</div>
{% endblock %}
", "DevLeaguesBundle::default.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/default.html.twig");
    }
}
