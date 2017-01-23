<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_1011b05445406091f1f979fe8dddd058af8808d93ee98b825ad1343f8601d47d extends Twig_Template
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
        $__internal_a5550ae7b13128c57836a4434bb4a43fc73c6d8989c1ff6c7c8f3719c051a732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5550ae7b13128c57836a4434bb4a43fc73c6d8989c1ff6c7c8f3719c051a732->enter($__internal_a5550ae7b13128c57836a4434bb4a43fc73c6d8989c1ff6c7c8f3719c051a732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_54ff86436c1b5e883b48df897123f61cba98b74b8adf4cb4b2fcb41f55a81c58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54ff86436c1b5e883b48df897123f61cba98b74b8adf4cb4b2fcb41f55a81c58->enter($__internal_54ff86436c1b5e883b48df897123f61cba98b74b8adf4cb4b2fcb41f55a81c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_a5550ae7b13128c57836a4434bb4a43fc73c6d8989c1ff6c7c8f3719c051a732->leave($__internal_a5550ae7b13128c57836a4434bb4a43fc73c6d8989c1ff6c7c8f3719c051a732_prof);

        
        $__internal_54ff86436c1b5e883b48df897123f61cba98b74b8adf4cb4b2fcb41f55a81c58->leave($__internal_54ff86436c1b5e883b48df897123f61cba98b74b8adf4cb4b2fcb41f55a81c58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
