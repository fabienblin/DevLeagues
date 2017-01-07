<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_f830a7a545a8bb347d07ee665559cd14a0ed762f65dba38e31c205da8d54e329 extends Twig_Template
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
        $__internal_b6690764dcb04cc33bb18851f6bc4cfe05554daf1e9993430df4058ad17fcd3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6690764dcb04cc33bb18851f6bc4cfe05554daf1e9993430df4058ad17fcd3c->enter($__internal_b6690764dcb04cc33bb18851f6bc4cfe05554daf1e9993430df4058ad17fcd3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_416c8c80328f462605a8ccbda413ee74e0e5141eae82002e600c49334feb3092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_416c8c80328f462605a8ccbda413ee74e0e5141eae82002e600c49334feb3092->enter($__internal_416c8c80328f462605a8ccbda413ee74e0e5141eae82002e600c49334feb3092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_b6690764dcb04cc33bb18851f6bc4cfe05554daf1e9993430df4058ad17fcd3c->leave($__internal_b6690764dcb04cc33bb18851f6bc4cfe05554daf1e9993430df4058ad17fcd3c_prof);

        
        $__internal_416c8c80328f462605a8ccbda413ee74e0e5141eae82002e600c49334feb3092->leave($__internal_416c8c80328f462605a8ccbda413ee74e0e5141eae82002e600c49334feb3092_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
