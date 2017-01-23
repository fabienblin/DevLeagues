<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_9742fdb60a3675cec3f591d0e811a886793fed215edb9999eb6327249453ba9b extends Twig_Template
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
        $__internal_475c985ab5adfcd921a083bbe5fefdce0b2a94e2647115db0fe872e06f5eed1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_475c985ab5adfcd921a083bbe5fefdce0b2a94e2647115db0fe872e06f5eed1f->enter($__internal_475c985ab5adfcd921a083bbe5fefdce0b2a94e2647115db0fe872e06f5eed1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_0410020e9da7cd19f80930cb071fe08f1634c4ba14a585d7cdc1ee7d61d5b456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0410020e9da7cd19f80930cb071fe08f1634c4ba14a585d7cdc1ee7d61d5b456->enter($__internal_0410020e9da7cd19f80930cb071fe08f1634c4ba14a585d7cdc1ee7d61d5b456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_475c985ab5adfcd921a083bbe5fefdce0b2a94e2647115db0fe872e06f5eed1f->leave($__internal_475c985ab5adfcd921a083bbe5fefdce0b2a94e2647115db0fe872e06f5eed1f_prof);

        
        $__internal_0410020e9da7cd19f80930cb071fe08f1634c4ba14a585d7cdc1ee7d61d5b456->leave($__internal_0410020e9da7cd19f80930cb071fe08f1634c4ba14a585d7cdc1ee7d61d5b456_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
