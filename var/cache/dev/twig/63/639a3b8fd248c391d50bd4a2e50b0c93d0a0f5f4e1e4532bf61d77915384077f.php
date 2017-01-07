<?php

/* @AvanzuAdminTheme/layout/login-layout.html.twig */
class __TwigTemplate_18b7c852b9b78bb6171bed043ea4fb8540ef590a91f4993b13b23c64fb4071f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts_head' => array($this, 'block_javascripts_head'),
            'page_content' => array($this, 'block_page_content'),
            'javascripts' => array($this, 'block_javascripts'),
            'javascripts_inline' => array($this, 'block_javascripts_inline'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a667e3676c9d2f07437956452a587a466568456b8b8345e3ea457603185d6841 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a667e3676c9d2f07437956452a587a466568456b8b8345e3ea457603185d6841->enter($__internal_a667e3676c9d2f07437956452a587a466568456b8b8345e3ea457603185d6841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/layout/login-layout.html.twig"));

        $__internal_43ab8ffc8f6bab06b4679b1bfd73fdfabc5bf01bbfbfed4d8696a270dfe7a570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43ab8ffc8f6bab06b4679b1bfd73fdfabc5bf01bbfbfed4d8696a270dfe7a570->enter($__internal_43ab8ffc8f6bab06b4679b1bfd73fdfabc5bf01bbfbfed4d8696a270dfe7a570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/layout/login-layout.html.twig"));

        // line 1
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "@AvanzuAdminTheme/layout/login-layout.html.twig", 1);
        // line 2
        echo "<!doctype html>
<!--[if lt IE 7 ]><html lang=\"en\" class=\"no-js ie6\"> <![endif]-->
<!--[if IE 7 ]><html lang=\"en\" class=\"no-js ie7\"> <![endif]-->
<!--[if IE 8 ]><html lang=\"en\" class=\"no-js ie8\"> <![endif]-->
<!--[if IE 9 ]><html lang=\"en\" class=\"no-js ie9\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang=\"en\" class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 16
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "

    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    ";
        // line 24
        echo "    ";
        $this->displayBlock('javascripts_head', $context, $blocks);
        // line 31
        echo "
</head>
<body class=\"login-page\">
";
        // line 34
        $this->displayBlock('page_content', $context, $blocks);
        // line 35
        echo "

";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "
";
        // line 43
        $this->displayBlock('javascripts_inline', $context, $blocks);
        // line 45
        echo "</body>
</html>
";
        
        $__internal_a667e3676c9d2f07437956452a587a466568456b8b8345e3ea457603185d6841->leave($__internal_a667e3676c9d2f07437956452a587a466568456b8b8345e3ea457603185d6841_prof);

        
        $__internal_43ab8ffc8f6bab06b4679b1bfd73fdfabc5bf01bbfbfed4d8696a270dfe7a570->leave($__internal_43ab8ffc8f6bab06b4679b1bfd73fdfabc5bf01bbfbfed4d8696a270dfe7a570_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_8754df4e0356c1920dde957a16339a844e707860009a055f717bfbe4cdf4a6e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8754df4e0356c1920dde957a16339a844e707860009a055f717bfbe4cdf4a6e7->enter($__internal_8754df4e0356c1920dde957a16339a844e707860009a055f717bfbe4cdf4a6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ea47e31a97c6371be09a09c33b2d41110b112331bbd97cad85f2f65ba92a9a4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea47e31a97c6371be09a09c33b2d41110b112331bbd97cad85f2f65ba92a9a4f->enter($__internal_ea47e31a97c6371be09a09c33b2d41110b112331bbd97cad85f2f65ba92a9a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Avanzu Admin!";
        
        $__internal_ea47e31a97c6371be09a09c33b2d41110b112331bbd97cad85f2f65ba92a9a4f->leave($__internal_ea47e31a97c6371be09a09c33b2d41110b112331bbd97cad85f2f65ba92a9a4f_prof);

        
        $__internal_8754df4e0356c1920dde957a16339a844e707860009a055f717bfbe4cdf4a6e7->leave($__internal_8754df4e0356c1920dde957a16339a844e707860009a055f717bfbe4cdf4a6e7_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_35fc12dec50d4ee91c01c25d33986350cc4efa428cdb6ac367f9d2debcb37568 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35fc12dec50d4ee91c01c25d33986350cc4efa428cdb6ac367f9d2debcb37568->enter($__internal_35fc12dec50d4ee91c01c25d33986350cc4efa428cdb6ac367f9d2debcb37568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_23ea988c9029b6399fe4c58c145980865578a24c3bb44595cebf53c60da673b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23ea988c9029b6399fe4c58c145980865578a24c3bb44595cebf53c60da673b8->enter($__internal_23ea988c9029b6399fe4c58c145980865578a24c3bb44595cebf53c60da673b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
    ";
        
        $__internal_23ea988c9029b6399fe4c58c145980865578a24c3bb44595cebf53c60da673b8->leave($__internal_23ea988c9029b6399fe4c58c145980865578a24c3bb44595cebf53c60da673b8_prof);

        
        $__internal_35fc12dec50d4ee91c01c25d33986350cc4efa428cdb6ac367f9d2debcb37568->leave($__internal_35fc12dec50d4ee91c01c25d33986350cc4efa428cdb6ac367f9d2debcb37568_prof);

    }

    // line 24
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_d822491e2e0404ae0f6a46e53acba5fd79a061b540da7030beed3ea92f26c71f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d822491e2e0404ae0f6a46e53acba5fd79a061b540da7030beed3ea92f26c71f->enter($__internal_d822491e2e0404ae0f6a46e53acba5fd79a061b540da7030beed3ea92f26c71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        $__internal_523526729ee1dc6e1dd54e44436f9f3978b0c34beba04075e153b79210b97317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_523526729ee1dc6e1dd54e44436f9f3978b0c34beba04075e153b79210b97317->enter($__internal_523526729ee1dc6e1dd54e44436f9f3978b0c34beba04075e153b79210b97317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 25
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
        
        $__internal_523526729ee1dc6e1dd54e44436f9f3978b0c34beba04075e153b79210b97317->leave($__internal_523526729ee1dc6e1dd54e44436f9f3978b0c34beba04075e153b79210b97317_prof);

        
        $__internal_d822491e2e0404ae0f6a46e53acba5fd79a061b540da7030beed3ea92f26c71f->leave($__internal_d822491e2e0404ae0f6a46e53acba5fd79a061b540da7030beed3ea92f26c71f_prof);

    }

    // line 34
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_6bd8bf4aedd29dbe6cb36243207106651524daccd6c4137596b84d072c53284c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bd8bf4aedd29dbe6cb36243207106651524daccd6c4137596b84d072c53284c->enter($__internal_6bd8bf4aedd29dbe6cb36243207106651524daccd6c4137596b84d072c53284c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_a29ae34ed8a3137fa79376dd9ea61970e38f8a0fdd32c5679825515095cdbe1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a29ae34ed8a3137fa79376dd9ea61970e38f8a0fdd32c5679825515095cdbe1a->enter($__internal_a29ae34ed8a3137fa79376dd9ea61970e38f8a0fdd32c5679825515095cdbe1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_a29ae34ed8a3137fa79376dd9ea61970e38f8a0fdd32c5679825515095cdbe1a->leave($__internal_a29ae34ed8a3137fa79376dd9ea61970e38f8a0fdd32c5679825515095cdbe1a_prof);

        
        $__internal_6bd8bf4aedd29dbe6cb36243207106651524daccd6c4137596b84d072c53284c->leave($__internal_6bd8bf4aedd29dbe6cb36243207106651524daccd6c4137596b84d072c53284c_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0e126f76503f898354d773c19d7ba3c4731876d1eb552d90382355773115761b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e126f76503f898354d773c19d7ba3c4731876d1eb552d90382355773115761b->enter($__internal_0e126f76503f898354d773c19d7ba3c4731876d1eb552d90382355773115761b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_320e0c880e2e520a1f23d121c9ce3d06c97f0972c4aa44cb7f3a5fa3e38d2634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_320e0c880e2e520a1f23d121c9ce3d06c97f0972c4aa44cb7f3a5fa3e38d2634->enter($__internal_320e0c880e2e520a1f23d121c9ce3d06c97f0972c4aa44cb7f3a5fa3e38d2634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>
";
        
        $__internal_320e0c880e2e520a1f23d121c9ce3d06c97f0972c4aa44cb7f3a5fa3e38d2634->leave($__internal_320e0c880e2e520a1f23d121c9ce3d06c97f0972c4aa44cb7f3a5fa3e38d2634_prof);

        
        $__internal_0e126f76503f898354d773c19d7ba3c4731876d1eb552d90382355773115761b->leave($__internal_0e126f76503f898354d773c19d7ba3c4731876d1eb552d90382355773115761b_prof);

    }

    // line 43
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_7799e772133bd44ffdb89e1b9943947c6716a85d7effddad8e5497fdbbf32461 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7799e772133bd44ffdb89e1b9943947c6716a85d7effddad8e5497fdbbf32461->enter($__internal_7799e772133bd44ffdb89e1b9943947c6716a85d7effddad8e5497fdbbf32461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        $__internal_5af2471c4930243fdab5c7577885744ca4c21a2dc1df95b6a7b7d8556c39f25f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5af2471c4930243fdab5c7577885744ca4c21a2dc1df95b6a7b7d8556c39f25f->enter($__internal_5af2471c4930243fdab5c7577885744ca4c21a2dc1df95b6a7b7d8556c39f25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_5af2471c4930243fdab5c7577885744ca4c21a2dc1df95b6a7b7d8556c39f25f->leave($__internal_5af2471c4930243fdab5c7577885744ca4c21a2dc1df95b6a7b7d8556c39f25f_prof);

        
        $__internal_7799e772133bd44ffdb89e1b9943947c6716a85d7effddad8e5497fdbbf32461->leave($__internal_7799e772133bd44ffdb89e1b9943947c6716a85d7effddad8e5497fdbbf32461_prof);

    }

    public function getTemplateName()
    {
        return "@AvanzuAdminTheme/layout/login-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 43,  188 => 39,  179 => 38,  162 => 34,  145 => 25,  136 => 24,  123 => 17,  114 => 16,  96 => 13,  84 => 45,  82 => 43,  79 => 41,  77 => 38,  73 => 35,  71 => 34,  66 => 31,  63 => 24,  58 => 21,  54 => 19,  51 => 16,  46 => 13,  33 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"AvanzuAdminThemeBundle:layout:macros.html.twig\" as macro %}
<!doctype html>
<!--[if lt IE 7 ]><html lang=\"en\" class=\"no-js ie6\"> <![endif]-->
<!--[if IE 7 ]><html lang=\"en\" class=\"no-js ie7\"> <![endif]-->
<!--[if IE 8 ]><html lang=\"en\" class=\"no-js ie8\"> <![endif]-->
<!--[if IE 9 ]><html lang=\"en\" class=\"no-js ie9\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang=\"en\" class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>{% block title %}Avanzu Admin!{% endblock %}</title>

    {# -------------------------------------------------------------------------------------------------- STYLESHEETS #}
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/styles/admin-lte-all.css') }}\" />
    {% endblock %}


    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

    {# --------------------------------------------------------------------------------------------- JAVASCRIPTS_HEAD #}
    {%  block javascripts_head %}
        <script type=\"text/javascript\" src=\"{{ asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/scripts/modernizr.js') }}\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    {% endblock %}

</head>
<body class=\"login-page\">
{% block page_content %}{% endblock %}


{# ------------------------------------------------------------------------------------------------------ JAVASCRIPTS #}
{% block javascripts %}
    <script src=\"{{ asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/scripts/admin-lte-all.js') }}\"></script>
{% endblock %}

{# ----------------------------------------------------------------------------------------------- JAVASCRIPTS_INLINE #}
{% block javascripts_inline %}
{% endblock %}
</body>
</html>
", "@AvanzuAdminTheme/layout/login-layout.html.twig", "/var/www/html/devleagues/github/app/Resources/AvanzuAdminThemeBundle/views/layout/login-layout.html.twig");
    }
}
