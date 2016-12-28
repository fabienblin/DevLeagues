<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_2f2cd4c709687e987c132ea667a1716c6f738cc06468fdcf59c0aae2c0b4517e extends Twig_Template
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
        $__internal_9562c44e3177fcb386ce6ed7636082f7e69f3d8d3b64ce8923855620b935f06f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9562c44e3177fcb386ce6ed7636082f7e69f3d8d3b64ce8923855620b935f06f->enter($__internal_9562c44e3177fcb386ce6ed7636082f7e69f3d8d3b64ce8923855620b935f06f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_9562c44e3177fcb386ce6ed7636082f7e69f3d8d3b64ce8923855620b935f06f->leave($__internal_9562c44e3177fcb386ce6ed7636082f7e69f3d8d3b64ce8923855620b935f06f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
