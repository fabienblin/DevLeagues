<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_b095cdf4757ebc117ee8127a8a78c49cf47d4f38179819ff9449a7fe07c9742a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_afe784ae5fe43b177790200257d8323d9db5b04af2946d7733649ff35f607bc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afe784ae5fe43b177790200257d8323d9db5b04af2946d7733649ff35f607bc0->enter($__internal_afe784ae5fe43b177790200257d8323d9db5b04af2946d7733649ff35f607bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_fd60687b1275aae8830bcf043b5b5190bb90f26b2c94a850990e3c4970a67ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd60687b1275aae8830bcf043b5b5190bb90f26b2c94a850990e3c4970a67ba4->enter($__internal_fd60687b1275aae8830bcf043b5b5190bb90f26b2c94a850990e3c4970a67ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afe784ae5fe43b177790200257d8323d9db5b04af2946d7733649ff35f607bc0->leave($__internal_afe784ae5fe43b177790200257d8323d9db5b04af2946d7733649ff35f607bc0_prof);

        
        $__internal_fd60687b1275aae8830bcf043b5b5190bb90f26b2c94a850990e3c4970a67ba4->leave($__internal_fd60687b1275aae8830bcf043b5b5190bb90f26b2c94a850990e3c4970a67ba4_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_5c173446035dac8828f1e5e0afd34dc34a534bf6e96439fb6403f03e2b2ec137 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c173446035dac8828f1e5e0afd34dc34a534bf6e96439fb6403f03e2b2ec137->enter($__internal_5c173446035dac8828f1e5e0afd34dc34a534bf6e96439fb6403f03e2b2ec137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_46b68229142b89195de2dc7be7755cbc78f5e1dcea9378651d66c93ae6eb64c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46b68229142b89195de2dc7be7755cbc78f5e1dcea9378651d66c93ae6eb64c9->enter($__internal_46b68229142b89195de2dc7be7755cbc78f5e1dcea9378651d66c93ae6eb64c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_46b68229142b89195de2dc7be7755cbc78f5e1dcea9378651d66c93ae6eb64c9->leave($__internal_46b68229142b89195de2dc7be7755cbc78f5e1dcea9378651d66c93ae6eb64c9_prof);

        
        $__internal_5c173446035dac8828f1e5e0afd34dc34a534bf6e96439fb6403f03e2b2ec137->leave($__internal_5c173446035dac8828f1e5e0afd34dc34a534bf6e96439fb6403f03e2b2ec137_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fc69b83ca48ec7bb4b97649c652f1fa4b3d2e0963b756eb4a13f77452fcb23a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc69b83ca48ec7bb4b97649c652f1fa4b3d2e0963b756eb4a13f77452fcb23a3->enter($__internal_fc69b83ca48ec7bb4b97649c652f1fa4b3d2e0963b756eb4a13f77452fcb23a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_25173daf9027aa2b70c65f68899b2547941009e0ea5b753b1c13b4e9cb2cffcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25173daf9027aa2b70c65f68899b2547941009e0ea5b753b1c13b4e9cb2cffcf->enter($__internal_25173daf9027aa2b70c65f68899b2547941009e0ea5b753b1c13b4e9cb2cffcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_25173daf9027aa2b70c65f68899b2547941009e0ea5b753b1c13b4e9cb2cffcf->leave($__internal_25173daf9027aa2b70c65f68899b2547941009e0ea5b753b1c13b4e9cb2cffcf_prof);

        
        $__internal_fc69b83ca48ec7bb4b97649c652f1fa4b3d2e0963b756eb4a13f77452fcb23a3->leave($__internal_fc69b83ca48ec7bb4b97649c652f1fa4b3d2e0963b756eb4a13f77452fcb23a3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
