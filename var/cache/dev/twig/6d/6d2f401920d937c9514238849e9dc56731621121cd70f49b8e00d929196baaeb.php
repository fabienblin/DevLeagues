<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_671c74368bbfb999af13882ffeccc9b05109bdf02050f8160c382be074edc69f extends Twig_Template
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
        $__internal_dbd9f6051f9405a9cd7f1bc2f363b5a86de50495a5ad229e2d736a17da1fcfc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd9f6051f9405a9cd7f1bc2f363b5a86de50495a5ad229e2d736a17da1fcfc3->enter($__internal_dbd9f6051f9405a9cd7f1bc2f363b5a86de50495a5ad229e2d736a17da1fcfc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_dbd9f6051f9405a9cd7f1bc2f363b5a86de50495a5ad229e2d736a17da1fcfc3->leave($__internal_dbd9f6051f9405a9cd7f1bc2f363b5a86de50495a5ad229e2d736a17da1fcfc3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
