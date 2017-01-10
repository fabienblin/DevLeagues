<?php

/* @FOSUser/Resetting/request_content.html.twig */
class __TwigTemplate_be0191a9823fc2a222e1578c62a1a5fe0a21fa1edc67e46d68e98ec6aee4de06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09ebd5a68a659b2f0fda1ea07c11e9deee28eb60d79d9bc242f121b069038b2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09ebd5a68a659b2f0fda1ea07c11e9deee28eb60d79d9bc242f121b069038b2c->enter($__internal_09ebd5a68a659b2f0fda1ea07c11e9deee28eb60d79d9bc242f121b069038b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        $__internal_b13de3443239338e5635be82fe420be8f1736dd0174985ba2ec3fb82b5cdddea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b13de3443239338e5635be82fe420be8f1736dd0174985ba2ec3fb82b5cdddea->enter($__internal_b13de3443239338e5635be82fe420be8f1736dd0174985ba2ec3fb82b5cdddea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_09ebd5a68a659b2f0fda1ea07c11e9deee28eb60d79d9bc242f121b069038b2c->leave($__internal_09ebd5a68a659b2f0fda1ea07c11e9deee28eb60d79d9bc242f121b069038b2c_prof);

        
        $__internal_b13de3443239338e5635be82fe420be8f1736dd0174985ba2ec3fb82b5cdddea->leave($__internal_b13de3443239338e5635be82fe420be8f1736dd0174985ba2ec3fb82b5cdddea_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "@FOSUser/Resetting/request_content.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/FOSUserBundle/views/Resetting/request_content.html.twig");
    }
}
