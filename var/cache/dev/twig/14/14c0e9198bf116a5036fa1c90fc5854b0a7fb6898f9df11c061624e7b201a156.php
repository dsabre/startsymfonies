<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9e8a53a8f3573c2d38fd49424dca2e1b2edc4036dd887b1721d2fe5a9fb4938f extends Twig_Template
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
        $__internal_c0d4dd7a105c03bb80993850563ab9724b168172e2b10f572f4b5fd6a8beaca9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0d4dd7a105c03bb80993850563ab9724b168172e2b10f572f4b5fd6a8beaca9->enter($__internal_c0d4dd7a105c03bb80993850563ab9724b168172e2b10f572f4b5fd6a8beaca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_cc03bcee6c2eb7d47eb9bcf7ef2ee04e2abcc256526412b387c79d34d42bd29c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc03bcee6c2eb7d47eb9bcf7ef2ee04e2abcc256526412b387c79d34d42bd29c->enter($__internal_cc03bcee6c2eb7d47eb9bcf7ef2ee04e2abcc256526412b387c79d34d42bd29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c0d4dd7a105c03bb80993850563ab9724b168172e2b10f572f4b5fd6a8beaca9->leave($__internal_c0d4dd7a105c03bb80993850563ab9724b168172e2b10f572f4b5fd6a8beaca9_prof);

        
        $__internal_cc03bcee6c2eb7d47eb9bcf7ef2ee04e2abcc256526412b387c79d34d42bd29c->leave($__internal_cc03bcee6c2eb7d47eb9bcf7ef2ee04e2abcc256526412b387c79d34d42bd29c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
